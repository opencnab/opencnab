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
	'name' => 'CNAB 240 - Santander - Cob. Remessa - Junho/2015',
	'indexes' => array(
		'register_type' => 'NR03',
		'segment_type' => array(
			'3' => array(
				'pi' => 14,
				'pf' => 14
			)
		)
	),
	'allowed' => array(
		'register_type' => '0|1|3|9',
		'segment_type' => 'P|Q|R|S'
	),
	'positions' => array(
		'0' => array(
			'NR01' => array(
				'pi' => 1,
				'pf' => 3,
				'rule' => 'numeric(3)',
				'description' => 'Código do Banco na compensação'
			),
			'NR02' => array(
				'pi' => 4,
				'pf' => 7,
				'rule' => 'numeric(4)',
				'description' => 'Lote de serviço'
			),
			'NR03' => array(
				'pi' => 8,
				'pf' => 8,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de registro'
			),
			'NR04' => array(
				'pi' => 9,
				'pf' => 16,
				'rule' => 'text(8)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR05' => array(
				'pi' => 17,
				'pf' => 17,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de inscrição da empresa'
			),
			'NR06' => array(
				'pi' => 18,
				'pf' => 32,
				'rule' => 'numeric(15)',
				'description' => 'Código de Transmissão'
			),
			'NR07' => array(
				'pi' => 48,
				'pf' => 72,
				'rule' => 'text(25)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR08' => array(
				'pi' => 73,
				'pf' => 102,
				'rule' => 'text(30)',
				'description' => 'Nome da empresa '
			),
			'NR09' => array(
				'pi' => 103,
				'pf' => 132,
				'rule' => 'text(30)',
				'description' => 'Nome do Banco'
			),
			'NR10' => array(
				'pi' => 133,
				'pf' => 142,
				'rule' => 'text(10)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR11' => array(
				'pi' => 143,
				'pf' => 143,
				'rule' => 'numeric(1)',
				'description' => 'Código remessa'
			),
			'NR12' => array(
				'pi' => 144,
				'pf' => 151,
				'rule' => 'numeric(8)',
				'description' => ' Data de geração do arquivo'
			),
			'NR13' => array(
				'pi' => 152,
				'pf' => 157,
				'rule' => 'text(6)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR14' => array(
				'pi' => 158,
				'pf' => 163,
				'rule' => 'numeric(6)',
				'description' => 'Nº seqüencial do arquivo'
			),
			'NR15' => array(
				'pi' => 164,
				'pf' => 166,
				'rule' => 'numeric(3)',
				'description' => 'Nº da versão do layout do arquivo'
			),
			'NR16' => array(
				'pi' => 167,
				'pf' => 240,
				'rule' => 'text(74)',
				'description' => 'Reservado (uso Banco)'
			) 
		),
		'3' => array(
			'P' => array(
				'NR01' => array(
					'pi' => 1,
					'pf' => 3,
					'rule' => 'numeric(3)',
					'description' => 'Código do Banco na compensação'
				),
				'NR02' => array(
					'pi' => 4,
					'pf' => 7,
					'rule' => 'numeric(4)',
					'description' => 'Numero do lote remessa'
				),
				'NR03' => array(
					'pi' => 8,
					'pf' => 8,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de registro'
				),
				'NR04' => array(
					'pi' => 9,
					'pf' => 13,
					'rule' => 'numeric(5)',
					'description' => 'Nº seqüencial do registro de lote'
				),
				'NR05' => array(
					'pi' => 14,
					'pf' => 14,
					'rule' => 'text(1)',
					'description' => 'Cód. Segmento do registro detalhe '
				),
				'NR06' => array(
					'pi' => 15,
					'pf' => 15,
					'rule' => 'numeric(8)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR07' => array(
					'pi' => 16,
					'pf' => 17,
					'rule' => 'numeric(2)',
					'description' => 'Código de movimento remessa'
				),
				'NR08' => array(
					'pi' => 18,
					'pf' => 21,
					'rule' => 'numeric(4)',
					'description' => 'Agência do Destinatária FIDC'
				),
				'NR09' => array(
					'pi' => 22,
					'pf' => 22,
					'rule' => 'numeric(1)',
					'description' => 'Dígito da Ag do Destinatária FIDC'
				),
				'NR10' => array(
					'pi' => 23,
					'pf' => 31,
					'rule' => 'numeric(9)',
					'description' => 'Número da conta corrente '
				),
				'NR11' => array(
					'pi' => 32,
					'pf' => 32,
					'rule' => 'numeric(1)',
					'description' => 'Dígito verificador da conta'
				),
				'NR12' => array(
					'pi' => 33,
					'pf' => 41,
					'rule' => 'numeric(9)',
					'description' => 'Conta cobrança Destinatária FIDC'
				),
				'NR13' => array(
					'pi' => 42,
					'pf' => 42,
					'rule' => 'numeric(1)',
					'description' => 'Dígito da conta cobrança Destinatária FIDC'
				),
				'NR14' => array(
					'pi' => 43,
					'pf' => 44,
					'rule' => 'text(2)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR15' => array(
					'pi' => 45,
					'pf' => 57,
					'rule' => 'numeric(13)',
					'description' => 'Identificação do título no Banco'
				),
				'NR16' => array(
					'pi' => 58,
					'pf' => 58,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de cobrança'
				),
				'NR17' => array(
					'pi' => 59,
					'pf' => 59,
					'rule' => 'numeric(1)',
					'description' => 'Forma de Cadastramento'
				),
				'NR18' => array(
					'pi' => 60,
					'pf' => 60,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de documento'
				),
				'NR19' => array(
					'pi' => 61,
					'pf' => 61,
					'rule' => 'text(1)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR20' => array(
					'pi' => 107,
					'pf' => 108,
					'rule' => 'numeric(2)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR21' => array(
					'pi' => 63,
					'pf' => 77,
					'rule' => 'text(15)',
					'description' => 'Nº do documento'
				),
				'NR22' => array(
					'pi' => 78,
					'pf' => 85,
					'rule' => 'numeric(8)',
					'description' => 'Data de vencimento do título'
				),
				'NR23' => array(
					'pi' => 86,
					'pf' => 100,
					'rule' => 'numeric(15)',
					'description' => 'Valor nominal do título'
				),
				'NR24' => array(
					'pi' => 101,
					'pf' => 104,
					'rule' => 'numeric(4)',
					'description' => 'Agência encarregada da cobrança'
				),
				'NR25' => array(
					'pi' => 105,
					'pf' => 105,
					'rule' => 'numeric(1)',
					'description' => 'Dígito da Agência do Beneficiário '
				),
				'NR26' => array(
					'pi' => 106,
					'pf' => 106,
					'rule' => 'text(1)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR27' => array(
					'pi' => 107,
					'pf' => 108,
					'rule' => 'numeric(2)',
					'description' => 'Espécie do título'
				),
				'NR28' => array(
					'pi' => 109,
					'pf' => 109,
					'rule' => 'text(1)',
					'description' => 'Identif. de título Aceito/Não Aceito'
				),
				'NR29' => array(
					'pi' => 110,
					'pf' => 117,
					'rule' => 'numeric(8)',
					'description' => 'Data da emissão do título'
				),
				'NR30' => array(
					'pi' => 118,
					'pf' => 118,
					'rule' => 'numeric(1)',
					'description' => 'Código do juros de mora'
				),
				'NR31' => array(
					'pi' => 119,
					'pf' => 126,
					'rule' => 'numeric(8)',
					'description' => 'Data do juros de mora'
				),
				'NR32' => array(
					'pi' => 127,
					'pf' => 141,
					'rule' => 'numeric(15)',
					'description' => 'Valor da mora/dia ou Taxa mensal'
				),
				'NR33' => array(
					'pi' => 142,
					'pf' => 142,
					'rule' => 'numeric(1)',
					'description' => 'Código do desconto 1'
				),
				'NR34' => array(
					'pi' => 143,
					'pf' => 150,
					'rule' => 'numeric(8)',
					'description' => 'Data de desconto 1'
				),
				'NR35' => array(
					'pi' => 151,
					'pf' => 165,
					'rule' => 'numeric(15)',
					'description' => 'Valor ou Percentual do desconto concedido'
				),
				'NR36' => array(
					'pi' => 166,
					'pf' => 180,
					'rule' => 'numeric(15)',
					'description' => 'Valor do IOF a ser recolhido'
				),
				'NR37' => array(
					'pi' => 181,
					'pf' => 195,
					'rule' => 'numeric(15)',
					'description' => 'Valor do abatimento'
				),
				'NR38' => array(
					'pi' => 196,
					'pf' => 220,
					'rule' => 'text(25)',
					'description' => 'Identificação do título na empresa'
				),
				'NR39' => array(
					'pi' => 221,
					'pf' => 221,
					'rule' => 'numeric(1)',
					'description' => 'Código para protesto'
				),
				'NR40' => array(
					'pi' => 222,
					'pf' => 223,
					'rule' => 'numeric(2)',
					'description' => 'Número de dias para protesto'
				),
				'NR41' => array(
					'pi' => 224,
					'pf' => 224,
					'rule' => 'numeric(1)',
					'description' => 'Código para Baixa/Devolução'
				),
				'NR42' => array(
					'pi' => 225,
					'pf' => 225,
					'rule' => 'numeric(1)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR43' => array(
					'pi' => 226,
					'pf' => 227,
					'rule' => 'numeric(2)',
					'description' => 'Número de dias para Baixa/Devolução'
				),
				'NR44' => array(
					'pi' => 228,
					'pf' => 229,
					'rule' => 'numeric(2)',
					'description' => 'Código da moeda'
				),
				'NR45' => array(
					'pi' => 230,
					'pf' => 240,
					'rule' => 'text(11)',
					'description' => 'Reservado (uso Banco)'
				)
			),
			'Q' => array(
				'NR01' => array(
					'pi' => 1,
					'pf' => 3,
					'rule' => 'numeric(3)',
					'description' => 'segment'
				),
				'NR02' => array(
					'pi' => 4,
					'pf' => 7,
					'rule' => 'numeric(4)',
					'description' => 'Numero do lote remessa'
				),
				'NR03' => array(
					'pi' => 8,
					'pf' => 8,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de registro'
				),
				'NR04' => array(
					'pi' => 9,
					'pf' => 13,
					'rule' => 'numeric(5)',
					'description' => 'Nº seqüencial do registro no lote'
				),
				'NR05' => array(
					'pi' => 14,
					'pf' => 14,
					'rule' => 'text(1)',
					'description' => 'Cód. segmento do registro detalhe'
				),
				'NR06' => array(
					'pi' => 15,
					'pf' => 15,
					'rule' => 'text(1)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR06' => array(
					'pi' => 16,
					'pf' => 17,
					'rule' => 'numeric(2)',
					'description' => 'Código de movimento remessa'
				),
				'NR07' => array(
					'pi' => 18,
					'pf' => 18,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de inscrição do Pagador'
				),
				'NR07' => array(
					'pi' => 19,
					'pf' => 33,
					'rule' => 'numeric(15)',
					'description' => 'Número de inscrição do Pagador'
				),
				'NR08' => array(
					'pi' => 34,
					'pf' => 73,
					'rule' => 'text(40)',
					'description' => 'Nome Pagador'
				),
				'NR09' => array(
					'pi' => 74,
					'pf' => 113,
					'rule' => 'text(40)',
					'description' => 'Endereço  Pagador'
				),
				'NR10' => array(
					'pi' => 114,
					'pf' => 128,
					'rule' => 'text(40)',
					'description' => 'Bairro  Pagador'
				),
				'NR11' => array(
					'pi' => 129,
					'pf' => 133,
					'rule' => 'numeric(5)',
					'description' => 'Cep  Pagador'
				),
				'NR12' => array(
					'pi' => 134,
					'pf' => 136,
					'rule' => 'numeric(5)',
					'description' => 'Sufixo do Cep do Pagador'
				),
				'NR13' => array(
					'pi' => 137,
					'pf' => 151,
					'rule' => 'text(15)',
					'description' => 'Cidade do Pagador'
				),
				'NR14' => array(
					'pi' => 152,
					'pf' => 153,
					'rule' => 'text(2)',
					'description' => 'Unidade da federação do Pagador'
				),
				'NR15' => array(
					'pi' => 154,
					'pf' => 154,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de inscrição Sacador/avalista'
				),
				'NR16' => array(
					'pi' => 155,
					'pf' => 169,
					'rule' => 'numeric(15)',
					'description' => 'Nº de inscrição Sacador/avalista'
				),
				'NR17' => array(
					'pi' => 170,
					'pf' => 209,
					'rule' => 'text(40)',
					'description' => 'Nome do Sacador/avalista'
				),
				'NR18' => array(
					'pi' => 210,
					'pf' => 212,
					'rule' => 'numeric(3)',
					'description' => 'Identificador de carne'
				),
				'NR19' => array(
					'pi' => 213,
					'pf' => 215,
					'rule' => 'numeric(3)',
					'description' => 'Seqüencial da Parcela ou número inicial da parcela N'
				),
				'NR20' => array(
					'pi' => 216,
					'pf' => 218,
					'rule' => 'numeric(3)',
					'description' => 'Quantidade total de parcelas'
				),
				'NR21' => array(
					'pi' => 219,
					'pf' => 221,
					'rule' => 'numeric(3)',
					'description' => 'Número do plano'
				),
				'NR22' => array(
					'pi' => 222,
					'pf' => 240,
					'rule' => 'text(19)',
					'description' => 'Reservado (uso Banco)'
				)
			),
			'R' => array(
				'NR01' => array(
					'pi' => 1,
					'pf' => 3,
					'rule' => 'numeric(3)',
					'description' => 'Código do Banco na compensação'
				),
				'NR02' => array(
					'pi' => 4,
					'pf' => 7,
					'rule' => 'numeric(4)',
					'description' => 'Numero do lote remessa'
				),
				'NR03' => array(
					'pi' => 8,
					'pf' => 8,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de registro'
				),
				'NR04' => array(
					'pi' => 9,
					'pf' => 13,
					'rule' => 'numeric(5)',
					'description' => 'Nº seqüencial do registro de lote'
				),
				'NR05' => array(
					'pi' => 14,
					'pf' => 14,
					'rule' => 'text(1)',
					'description' => 'Código segmento do registro detalhe'
				),
				'NR06' => array(
					'pi' => 15,
					'pf' => 15,
					'rule' => 'text(1)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR07' => array(
					'pi' => 16,
					'pf' => 17,
					'rule' => 'numeric(2)',
					'description' => 'Código de movimento'
				),
				'NR08' => array(
					'pi' => 18,
					'pf' => 18,
					'rule' => 'numeric(1)',
					'description' => 'Código do desconto 2'
				),
				'NR09' => array(
					'pi' => 19,
					'pf' => 26,
					'rule' => 'numeric(8)',
					'description' => 'Data do desconto 2'
				),
				'NR10' => array(
					'pi' => 27,
					'pf' => 41,
					'rule' => 'numeric(15)',
					'description' => 'Valor/Percentual a ser concedido'
				),
				'NR11' => array(
					'pi' => 42,
					'pf' => 65,
					'rule' => 'text(24)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR12' => array(
					'pi' => 66,
					'pf' => 66,
					'rule' => 'numeric(1)',
					'description' => 'Código da multa'
				),
				'NR13' => array(
					'pi' => 67,
					'pf' => 74,
					'rule' => 'numeric(8)',
					'description' => 'Data da multa'
				),
				'NR14' => array(
					'pi' => 75,
					'pf' => 89,
					'rule' => 'numeric(13,2)',
					'description' => 'Valor/Percentual a ser aplicado'
				),
				'NR15' => array(
					'pi' => 90,
					'pf' => 99,
					'rule' => 'text(10)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR16' => array(
					'pi' => 100,
					'pf' => 139,
					'rule' => 'text(40)',
					'description' => 'Mensagem 3'
				),
				'NR17' => array(
					'pi' => 140,
					'pf' => 179,
					'rule' => 'text(40)',
					'description' => 'Mensagem 4'
				),
				'NR18' => array(
					'pi' => 180,
					'pf' => 240,
					'rule' => 'text(61)',
					'description' => 'Reservado'
				)
			),
			'S' => array(
				'NR01' => array(
					'pi' => 1,
					'pf' => 3,
					'rule' => 'numeric(3)',
					'description' => 'Código do Banco na compensação'
				),
				'NR02' => array(
					'pi' => 4,
					'pf' => 7,
					'rule' => 'numeric(4)',
					'description' => 'Numero do lote remessa'
				),
				'NR03' => array(
					'pi' => 8,
					'pf' => 8,
					'rule' => 'numeric(1)',
					'description' => 'Tipo de registro'
				),
				'NR04' => array(
					'pi' => 9,
					'pf' => 13,
					'rule' => 'numeric(5)',
					'description' => 'Nº seqüencial do registro de lote'
				),
				'NR05' => array(
					'pi' => 14,
					'pf' => 14,
					'rule' => 'text(1)',
					'description' => 'Cód. Segmento do registro detalhe'
				),
				'NR06' => array(
					'pi' => 15,
					'pf' => 15,
					'rule' => 'text(1)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR07' => array(
					'pi' => 16,
					'pf' => 17,
					'rule' => 'numeric(2)',
					'description' => 'Código de movimento'
				),
				'NR08' => array(
					'pi' => 18,
					'pf' => 18,
					'rule' => 'numeric(1)',
					'description' => 'Identificação da impressão'
				),
				'NR09' => array(
					'pi' => 19,
					'pf' => 20,
					'rule' => 'numeric(2)',
					'description' => 'Número da linha a ser impressa'
				),
				'NR10' => array(
					'pi' => 21,
					'pf' => 21,
					'rule' => 'numeric(1)',
					'description' => 'Mensagem para recibo do Pagador'
				),
				'NR11' => array(
					'pi' => 22,
					'pf' => 121,
					'rule' => 'text(100)',
					'description' => 'Mensagem a ser impressa'
				),
				'NR12' => array(
					'pi' => 122,
					'pf' => 240,
					'rule' => 'text(119)',
					'description' => 'Reservado (uso Banco)'
				)
			)
		),
		'9' => array(
			'NR01' => array(
				'pi' => 1,
				'pf' => 3,
				'rule' => 'numeric(3)',
				'description' => 'Código do Banco na compensação'
			),
			'NR02' => array(
				'pi' => 4,
				'pf' => 7,
				'rule' => 'numeric(4)',
				'description' => 'Numero do lote remessa'
			),
			'NR03' => array(
				'pi' => 8,
				'pf' => 8,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de registro'
			),
			'NR03' => array(
				'pi' => 9,
				'pf' => 17,
				'rule' => 'numeric(9)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR03' => array(
				'pi' => 18,
				'pf' => 23,
				'rule' => 'numeric(6)',
				'description' => 'Quantidade de lotes do arquivo'
			),
			'NR03' => array(
				'pi' => 24,
				'pf' => 29,
				'rule' => 'numeric(6)',
				'description' => 'Quantidade de registros do arquivo'
			),
			'NR03' => array(
				'pi' => 30,
				'pf' => 240,
				'rule' => 'text(211)',
				'description' => 'Reservado (uso Banco)'
			)
		) 
	)
)
?>