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

return array(
	'name' => 'CNAB 400 - Banco do Brasil - Cob. Remessa - Julho/2017',
	'indexes' => array(
		'register_type' => 'NR01',
		'segment_type' => FALSE
	),
	'allowed' => array(
		'register_type' => '0|7|9',
		'segment_type' => FALSE
	),
	'positions' => array(
		'0' => array(
			'NR01' => array(
				'pi' => 1,
				'pf' => 1,
				'rule' => 'numeric(1)',
				'description' => 'Identificação do Registro Header: “0” (zero)'
			),
			'NR02' => array(
				'pi' => 2,
				'pf' => 2,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de Operação: “1” (um)'
			),
			'NR03' => array(
				'pi' => 3,
				'pf' => 9,
				'rule' => 'text(7)',
				'description' => 'Identificação por Extenso do Tipo de Operação'
			),
			'NR04' => array(
				'pi' => 10,
				'pf' => 11,
				'rule' => 'numeric(2)',
				'description' => 'Identificação do Tipo de Serviço: “01”'
			),
			'NR05' => array(
				'pi' => 12,
				'pf' => 19,
				'rule' => 'text(8)',
				'description' => 'Identificação por Extenso do Tipo de Serviço: “COBRANCA”'
			),
			'NR06' => array(
				'pi' => 20,
				'pf' => 26,
				'rule' => 'text(7)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR07' => array(
				'pi' => 27,
				'pf' => 30,
				'rule' => 'numeric(4)',
				'description' => 'Prefixo da Agência: Número da Agência onde está cadastrado o convênio líder do cedente'
			),
			'NR08' => array(
				'pi' => 31,
				'pf' => 31,
				'rule' => 'text(1)',
				'description' => 'Dígito Verificador - D.V. - do Prefixo da Agência.'
			),
			'NR09' => array(
				'pi' => 32,
				'pf' => 39,
				'rule' => 'numeric(8)',
				'description' => 'Número da Conta Corrente: Número da conta onde está cadastrado o Convênio Líder do Cedente'
			),
			'NR10' => array(
				'pi' => 40,
				'pf' => 40,
				'rule' => 'text(1)',
				'description' => 'Dígito Verificador - D.V. – do Número da Conta Corrente do Cedente'
			),
			'NR11' => array(
				'pi' => 41,
				'pf' => 46,
				'rule' => 'numeric(6)',
				'description' => 'Complemento do Registro: “000000”'
			),
			'NR12' => array(
				'pi' => 47,
				'pf' => 76,
				'rule' => 'text(30)',
				'description' => 'Nome do Cedente'
			),
			'NR13' => array(
				'pi' => 77,
				'pf' => 94,
				'rule' => 'text(18)',
				'description' => '001BANCODOBRASIL'
			),
			'NR14' => array(
				'pi' => 95,
				'pf' => 100,
				'rule' => 'numeric(6)',
				'description' => 'Data da Gravação: Informe no formato “DDMMAA”'
			),
			'NR15' => array(
				'pi' => 101,
				'pf' => 107,
				'rule' => 'numeric(7)',
				'description' => 'Seqüencial da Remessa'
			),
			'NR16' => array(
				'pi' => 108,
				'pf' => 129,
				'rule' => 'text(22)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR17' => array(
				'pi' => 130,
				'pf' => 136,
				'rule' => 'numeric(7)',
				'description' => 'Número do Convênio Líder (numeração acima de 1.000.000 um milhão)"'
			),
			'NR18' => array(
				'pi' => 137,
				'pf' => 394,
				'rule' => 'text(258)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR19' => array(
				'pi' => 395,
				'pf' => 400,
				'rule' => 'numeric(6)',
				'description' => 'Seqüencial do Registro:”000001”'
			) 
		),
		'7' => array(
			'NR01' => array(
				'pi' => 1,
				'pf' => 1,
				'rule' => 'numeric(1)',
				'description' => 'Identificação do Registro Detalhe: 7 (sete)'
			),
			'NR02' => array(
				'pi' => 2,
				'pf' => 3,
				'rule' => 'numeric(2)',
				'description' => 'Tipo de Inscrição do Cedente'
			),
			'NR03' => array(
				'pi' => 4,
				'pf' => 17,
				'rule' => 'numeric(14)',
				'description' => 'Número do CPF/CNPJ do Cedente'
			),
			'NR04' => array(
				'pi' => 18,
				'pf' => 21,
				'rule' => 'numeric(4)',
				'description' => 'Prefixo da Agência'
			),
			'NR05' => array(
				'pi' => 22,
				'pf' => 22,
				'rule' => 'text(1)',
				'description' => 'Dígito Verificador - D.V. - do Prefixo da Agência'
			),
			'NR06' => array(
				'pi' => 23,
				'pf' => 30,
				'rule' => 'numeric(8)',
				'description' => 'Número da Conta Corrente do Cedente'
			),
			'NR07' => array(
				'pi' => 31,
				'pf' => 31,
				'rule' => 'text(1)',
				'description' => 'Dígito Verificador - D.V. - do Número da Conta Corrente do Cedente'
			),
			'NR08' => array(
				'pi' => 32,
				'pf' => 38,
				'rule' => 'numeric(7)',
				'description' => 'Número do Convênio de Cobrança do Cedente'
			),
			'NR09' => array(
				'pi' => 39,
				'pf' => 63,
				'rule' => 'text(25)',
				'description' => 'Código de Controle da Empresa'
			),
			'NR10' => array(
				'pi' => 64,
				'pf' => 80,
				'rule' => 'numeric(17)',
				'description' => 'Nosso-Número'
			),
			'NR11' => array(
				'pi' => 81,
				'pf' => 82,
				'rule' => 'numeric(2)',
				'description' => 'Número da Prestação: “00” (Zeros)'
			),
			'NR12' => array(
				'pi' => 83,
				'pf' => 84,
				'rule' => 'numeric(2)',
				'description' => 'Grupo de Valor: “00” (Zeros)'
			),
			'NR13' => array(
				'pi' => 85,
				'pf' => 87,
				'rule' => 'text(3)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR14' => array(
				'pi' => 88,
				'pf' => 88,
				'rule' => 'text(1)',
				'description' => 'Indicativo de Mensagem ou Sacador/Avalista'
			),
			'NR15' => array(
				'pi' => 89,
				'pf' => 91,
				'rule' => 'text(3)',
				'description' => 'Prefixo do Título: “Brancos”'
			),
			'NR16' => array(
				'pi' => 92,
				'pf' => 94,
				'rule' => 'text(3)',
				'description' => 'Variação da Carteira'
			),
			'NR17' => array(
				'pi' => 95,
				'pf' => 95,
				'rule' => 'numeric(1)',
				'description' => 'Conta Caução: “0” (Zero)'
			),
			'NR18' => array(
				'pi' => 96,
				'pf' => 101,
				'rule' => 'numeric(6)',
				'description' => 'Número do Borderô: “000000” (Zeros)'
			),
			'NR19' => array(
				'pi' => 102,
				'pf' => 106,
				'rule' => 'text(5)',
				'description' => 'Tipo de Cobrança'
			),
			'NR20' => array(
				'pi' => 107,
				'pf' => 108,
				'rule' => 'numeric(2)',
				'description' => 'Carteira de Cobrança'
			),
			'NR21' => array(
				'pi' => 109,
				'pf' => 110,
				'rule' => 'numeric(2)',
				'description' => 'Comando'
			),
			'NR22' => array(
				'pi' => 111,
				'pf' => 120,
				'rule' => 'text(10)',
				'description' => 'Seu Número/Número do Título Atribuído pelo Cedente'
			),
			'NR23' => array(
				'pi' => 121,
				'pf' => 126,
				'rule' => 'numeric(6)',
				'description' => 'Data de Vencimento'
			),
			'NR24' => array(
				'pi' => 127,
				'pf' => 139,
				'rule' => 'numeric(11,2)',
				'description' => 'Valor do Título'
			),
			'NR25' => array(
				'pi' => 140,
				'pf' => 142,
				'rule' => 'numeric(3)',
				'description' => 'Número do Banco: “001”'
			),
			'NR26' => array(
				'pi' => 143,
				'pf' => 146,
				'rule' => 'numeric(4)',
				'description' => 'Prefixo da Agência Cobradora: “0000”'
			),
			'NR27' => array(
				'pi' => 147,
				'pf' => 147,
				'rule' => 'text(1)',
				'description' => 'Dígito Verificador do Prefixo da Agência Cobradora: “Brancos”'
			),
			'NR28' => array(
				'pi' => 148,
				'pf' => 149,
				'rule' => 'numeric(2)',
				'description' => 'Espécie de Titulo'
			),
			'NR29' => array(
				'pi' => 150,
				'pf' => 150,
				'rule' => 'text(1)',
				'description' => 'Aceite do Título:'
			),
			'NR30' => array(
				'pi' => 151,
				'pf' => 156,
				'rule' => 'numeric(6)',
				'description' => 'Data de Emissão: Informe no formato “DDMMAA”'
			),
			'NR31' => array(
				'pi' => 157,
				'pf' => 158,
				'rule' => 'numeric(2)',
				'description' => 'Instrução Codificada'
			),
			'NR32' => array(
				'pi' => 159,
				'pf' => 160,
				'rule' => 'numeric(2)',
				'description' => 'Instrução Codificada'
			),
			'NR33' => array(
				'pi' => 161,
				'pf' => 173,
				'rule' => 'numeric(11,2)',
				'description' => 'Juros de Mora por Dia de Atraso'
			),
			'NR34' => array(
				'pi' => 174,
				'pf' => 179,
				'rule' => 'numeric(6)',
				'description' => 'Data Limite para Concessão de Desconto/Data de Operação do BBVendor/Juros de Mora'
			),
			'NR35' => array(
				'pi' => 180,
				'pf' => 192,
				'rule' => 'numeric(11,2)',
				'description' => 'Valor do Desconto'
			),
			'NR36' => array(
				'pi' => 193,
				'pf' => 205,
				'rule' => 'numeric(11,2)',
				'description' => 'Valor do IOF/Qtde Unidade Variável.'
			),
			'NR37' => array(
				'pi' => 206,
				'pf' => 218,
				'rule' => 'numeric(11,2)',
				'description' => 'Valor do Abatimento'
			),
			'NR38' => array(
				'pi' => 219,
				'pf' => 220,
				'rule' => 'numeric(2)',
				'description' => 'Tipo de Inscrição do Sacado'
			),
			'NR39' => array(
				'pi' => 221,
				'pf' => 234,
				'rule' => 'numeric(14)',
				'description' => 'Número do CNPJ ou CPF do Sacado'
			),
			'NR40' => array(
				'pi' => 235,
				'pf' => 271,
				'rule' => 'text(37)',
				'description' => 'Nome do Sacado'
			),
			'NR41' => array(
				'pi' => 272,
				'pf' => 274,
				'rule' => 'text(3)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR42' => array(
				'pi' => 275,
				'pf' => 314,
				'rule' => 'text(40)',
				'description' => 'Endereço do Sacado'
			),
			'NR43' => array(
				'pi' => 315,
				'pf' => 326,
				'rule' => 'text(12)',
				'description' => 'Bairro do Sacado'
			),
			'NR44' => array(
				'pi' => 327,
				'pf' => 334,
				'rule' => 'numeric(8)',
				'description' => 'CEP do Endereço do Sacado'
			),
			'NR45' => array(
				'pi' => 335,
				'pf' => 349,
				'rule' => 'text(15)',
				'description' => 'Cidade do Sacado'
			),
			'NR46' => array(
				'pi' => 350,
				'pf' => 351,
				'rule' => 'text(2)',
				'description' => 'UF da Cidade do Sacado'
			),
			'NR47' => array(
				'pi' => 352,
				'pf' => 391,
				'rule' => 'text(40)',
				'description' => 'Observações/Mensagem ou Sacador/Avalista'
			),
			'NR48' => array(
				'pi' => 392,
				'pf' => 393,
				'rule' => 'text(2)',
				'description' => 'Número de Dias Para Protesto'
			),
			'NR49' => array(
				'pi' => 394,
				'pf' => 394,
				'rule' => 'text(1)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR50' => array(
				'pi' => 395,
				'pf' => 400,
				'rule' => 'numeric(6)',
				'description' => 'Seqüencial de Registro'
			) 
		),
		'9' => array(
			'NR01' => array(
				'pi' => 1,
				'pf' => 1,
				'rule' => 'numeric(1)',
				'description' => 'Identificação do Registro Trailer: “9”'
			),
			'NR02' => array(
				'pi' => 2,
				'pf' => 394,
				'rule' => 'text(393)',
				'description' => 'Complemento do Registro: “Brancos”'
			),
			'NR03' => array(
				'pi' => 395,
				'pf' => 400,
				'rule' => 'numeric(6)',
				'description' => 'Número Seqüencial do Registro no Arquivo'
			)
		) 
	)
)
?>