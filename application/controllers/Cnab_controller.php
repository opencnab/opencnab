<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cnab_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		
		$this->load->library("OpenCnab");

		$this->OpenCnab = new OpenCnab();

		$this->layouts = $this->OpenCnab->getLayouts();
	}

	//Pagina inicial da aplicação, nela passamos todos os layouts do diretorio
	public function index()
	{	
		$this->load->view('index', 
			array(
				'layouts' => $this->layouts
			)
		);
	}

	//Função de inicialização de leitura do arquivo fisico do Cnab e escolha do modelo e banco
	public function ini(){

		//Arquivo do upload
		$filename = $_FILES['cnab'];

		//Layout escolhido 
		$layout = $_POST['layout'];

		//Extensões permitidas
		if( (substr($filename['name'],(strlen($filename['name'])-3),strlen($filename['name'])) != 'REM')
		&& (substr($filename['name'],(strlen($filename['name'])-3),strlen($filename['name'])) != 'rem')
		&& (substr($filename['name'],(strlen($filename['name'])-3),strlen($filename['name'])) != 'RET')
		&& (substr($filename['name'],(strlen($filename['name'])-3),strlen($filename['name'])) != 'ret')
		&& (substr($filename['name'],(strlen($filename['name'])-3),strlen($filename['name'])) != 'TXT')
		&& (substr($filename['name'],(strlen($filename['name'])-3),strlen($filename['name'])) != 'txt') ){
			echo "Formato de arquivo nao permitido.";
			exit;
		}

		$filedata = file_get_contents($_FILES["cnab"]["tmp_name"]);
		$filedata = str_replace(' ', '*', $filedata);
	

		$cnab = explode("\n", $filedata);

		$cnab = array_filter($cnab, function($value) { return $value !== ''; });
		$cnab = array_combine(range(1, count($cnab)), array_values($cnab));

		//Grava em uma sessão o nome do arquivo e o layout escolhido
		$session = array(
			'cnab' => $cnab,
			'layout' 	=> $layout
		);
	
		$this->session->set_userdata($session);

		//Redireciona para a rota do leitor
		redirect(site_url('cnab'));
	}

	public function cnab($linha = 1)
	{	
		//Instancia a biblioteca da paginação
		$this->load->library('pagination');

		$this->cnab = $this->session->userdata('cnab');
		
		//Configurações para a paginação
		$config['base_url'] = site_url('cnab');
		$config['total_rows'] = count($this->cnab);
		$config['per_page'] = 1;

		$config['uri_segment'] = 2;
		$config['num_links'] = count($this->cnab);

		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = FALSE;
		
		$config['full_tag_open'] = '';
		$config['full_tag_close'] = '';
		$config['cur_tag_open'] = ' <b>[ ';
		$config['cur_tag_close'] = ' ]</b> ';

		$config['num_tag_open'] = ' [ ';
		$config['num_tag_close'] = ' ] ';

		$config['next_tag_open'] = ' [ ';
		$config['next_tag_close'] = ' ] ';

		$config['prev_tag_open'] = ' [ ';
		$config['prev_tag_close'] = ' ] ';

		$config['first_tag_open'] = ' [ ';
		$config['first_tag_close'] = ' ] ';

		$config['last_tag_open'] = ' [ ';
		$config['last_tag_close'] = ' ] ';

		$config['next_link'] = 'Proxima Linha';
		$config['prev_link'] = 'Linha Anterior';

		$config['first_link'] = 'Cabecalho';
		$config['last_link'] = 'Rodape';
		
		$this->pagination->initialize($config);

		//Descobre TR = Tipo de Registro
		$dataAux1 = $this->layouts[$this->session->userdata('layout')]['indexes']['register_type'];
		$dataAux2 = $this->descoveryIndex($this->cnab[$linha]);

		$dataAux3 = explode("|", $this->layouts[$this->session->userdata('layout')]['allowed']['register_type']);

		//Se o Tipo de Registro for diferente do permitido então exibe mensagem de erro.
		if (!in_array($dataAux2[$dataAux1], $dataAux3)) { 
			echo '"register_type" nao existe no CNAB.';
			exit;
		}

		$register_type = $dataAux2[$dataAux1];
		
		//Descobre ST = Tipo de Segmento... SE o aquivo de layout utilizar segmento
		$segment_type = FALSE;

		if($this->layouts[$this->session->userdata('layout')]['indexes']['segment_type'] != FALSE){
			
			if( $linha != 1 && $linha != count($this->cnab) && $register_type != 1 && $register_type != 5 ){
				$dataAux22 = $this->descoveryIndexS($this->cnab[$linha]);
				$segment_type = $dataAux22['NR05'];
			}
		
		} 
	
		//Obtem em forma de array todos os dados da linha do cnab 
		$data = $this->OpenCnab->read($this->session->userdata('layout'), $this->cnab[$linha], $register_type, $segment_type);
		
		//Se existir segmento usa o modelo com segmentos se nao... nao :)
		if($segment_type != FALSE){
			$quallposicaolayoutusar = $this->layouts[$this->session->userdata('layout')]['positions'][$register_type][$segment_type];
		} else {
			$quallposicaolayoutusar = $this->layouts[$this->session->userdata('layout')]['positions'][$register_type];
		}

		$this->load->view('reader', 
			array(
				'register_type' => $register_type,
				'positions' => $quallposicaolayoutusar,
				'data' => $data,
			)
		);
		
		
	}

	//Descobre o tipo do registro
	public function descoveryIndex($linha)
	{
		$data = array();

		foreach ($this->layouts[$this->session->userdata('layout')]['positions'][0] as $NR => $position) {
					
			$data[$NR] = $this->OpenCnab->split_position($linha, $position['pi'], $position['pf']);
			
		}	

		return $data;
	}

	//Descobre o tipo do segmento
	public function descoveryIndexS($linha)
	{
		$data = array();

		$data['NR05'] = $this->OpenCnab->split_position($linha, 
			$this->layouts[$this->session->userdata('layout')]['indexes']['segment_type'][3]['pi'],
			$this->layouts[$this->session->userdata('layout')]['indexes']['segment_type'][3]['pi']
		);
	
		return $data;
	}
}	