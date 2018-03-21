<?php

/*
* The MIT License (MIT)
* 
* Copyright (c) 2018 Tiago M. Abreu
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*/

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * OpenCnab Class
 */
class OpenCnab
{   
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct() {
        $this->CI =& get_instance();
    }
    

    public function getLayouts() {
        //Obtem o diretorio onde contem os arquivos de layouts.
        $path = APPPATH.'opencnab/layouts';
        $diretorio = dir($path);

        //Grava em um array todos eles para uso durante a aplicação.
        $cont = 0;
        while($arquivo = $diretorio -> read()){
            if($arquivo <> '.' && $arquivo <> '..'){
                $this->layouts[$cont] = require_once($path.'/'.$arquivo);
                $cont++;
            }
        }
        $diretorio -> close();

        return $this->layouts;
    }

    public function read($layout, $cnabLinha, $register_type, $segment_type) {
        $data = array();

        //Se existir segmento usa o modelo com segmentos se nao... nao :)
        if($segment_type != FALSE){
            
            foreach ($this->layouts[$layout]['positions'][$register_type][$segment_type]  as $NR => $position) {
                
                $data[$NR] = str_replace("*"," ", $this->split_position($cnabLinha, $position['pi'], $position['pf']));
                
            }   

        } else {
            
            foreach ($this->layouts[$layout]['positions'][$register_type] as $NR => $position) {
                
                $data[$NR] = str_replace("*"," ", $this->split_position($cnabLinha, $position['pi'], $position['pf']));
                
            }

        }

        return $data;
    }
   
    //Função para obter os dados de acordo com a posição
    public function split_position($linha, $pi, $pf){
        return substr($linha, $pi-1, $pf-($pi-1));  
    }
/******************************************************************************/
}
