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
	'name' => 'CNAB 240 - Santander - Retorno - Junho/2015',
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
		'register_type' => '0|1|3|5|9',
		'segment_type' => 'T|U|Y'
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
				'description' => 'Nº de inscrição da empresa'
			),
			'NR07' => array(
				'pi' => 33,
				'pf' => 36,
				'rule' => 'numeric(4)',
				'description' => 'Agência do Beneficiário'
			),
			'NR08' => array(
				'pi' => 37,
				'pf' => 37,
				'rule' => 'numeric(1)',
				'description' => 'Dígito da Agência do Beneficiário'
			),
			'NR09' => array(
				'pi' => 38,
				'pf' => 46,
				'rule' => 'numeric(9)',
				'description' => 'Número da conta corrente'
			),
			'NR10' => array(
				'pi' => 47,
				'pf' => 47,
				'rule' => 'numeric(1)',
				'description' => 'Dígito verificador da conta'
			),
			'NR11' => array(
				'pi' => 48,
				'pf' => 52,
				'rule' => 'text(5)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR12' => array(
				'pi' => 53,
				'pf' => 61,
				'rule' => 'numeric(9)',
				'description' => 'Código do Beneficiário'
			),
			'NR13' => array(
				'pi' => 62,
				'pf' => 72,
				'rule' => 'numeric(11)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR14' => array(
				'pi' => 73,
				'pf' => 102,
				'rule' => 'text(30)',
				'description' => 'Nome da empresa '
			),
			'NR15' => array(
				'pi' => 103,
				'pf' => 132,
				'rule' => 'text(30)',
				'description' => 'Nome do Banco'
			),
			'NR15' => array(
				'pi' => 133,
				'pf' => 142,
				'rule' => 'text(10)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR16' => array(
				'pi' => 143,
				'pf' => 143,
				'rule' => 'numeric(1)',
				'description' => 'Código remessa / retorno'
			),
			'NR17' => array(
				'pi' => 144,
				'pf' => 151,
				'rule' => 'numeric(8)',
				'description' => ' Data de geração do arquivo'
			),
			'NR18' => array(
				'pi' => 152,
				'pf' => 157,
				'rule' => 'text(6)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR19' => array(
				'pi' => 158,
				'pf' => 163,
				'rule' => 'numeric(6)',
				'description' => 'Nº seqüencial do arquivo'
			),
			'NR20' => array(
				'pi' => 164,
				'pf' => 166,
				'rule' => 'numeric(3)',
				'description' => 'Nº da versão do layout do arquivo'
			),
			'NR21' => array(
				'pi' => 167,
				'pf' => 240,
				'rule' => 'text(74)',
				'description' => 'Reservado (uso Banco)'
			) 
		),
		'1' => array(
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
				'pf' => 9,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de operação '
			),
			'NR05' => array(
				'pi' => 10,
				'pf' => 11,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de serviço  '
			),
			'NR06' => array(
				'pi' => 12,
				'pf' => 13,
				'rule' => 'numeric(1)',
				'description' => 'Reservado (uso Banco)   '
			),
			'NR07' => array(
				'pi' => 14,
				'pf' => 16,
				'rule' => 'numeric(1)',
				'description' => 'Nº da versão do layout do lote '
			),
			'NR08' => array(
				'pi' => 17,
				'pf' => 17,
				'rule' => 'numeric(1)',
				'description' => 'Reservado'
			),
			'NR09' => array(
				'pi' => 18,
				'pf' => 18,
				'rule' => 'numeric(1)',
				'description' => 'Tipo de inscrição da empresa '
			),
			'NR10' => array(
				'pi' => 19,
				'pf' => 33,
				'rule' => 'numeric(1)',
				'description' => 'Nº de inscrição da empresa '
			),
			'NR11' => array(
				'pi' => 34,
				'pf' => 42,
				'rule' => 'numeric(1)',
				'description' => 'Código do Beneficiário '
			),
			'NR12' => array(
				'pi' => 43,
				'pf' => 53,
				'rule' => 'numeric(1)',
				'description' => 'Reservado(uso Banco) '
			),
			'NR13' => array(
				'pi' => 54,
				'pf' => 57,
				'rule' => 'numeric(1)',
				'description' => 'Agência do Beneficiário '
			),
			'NR14' => array(
				'pi' => 58,
				'pf' => 58,
				'rule' => 'numeric(1)',
				'description' => 'Dígito da Agência do Beneficiário  '
			),
			'NR15' => array(
				'pi' => 59,
				'pf' => 67,
				'rule' => 'numeric(1)',
				'description' => 'Número da conta do Beneficiário  '
			),
			'NR16' => array(
				'pi' => 68,
				'pf' => 68,
				'rule' => 'numeric(1)',
				'description' => 'Dígito verificador da conta  '
			),
			'NR17' => array(
				'pi' => 69,
				'pf' => 73,
				'rule' => 'numeric(1)',
				'description' => 'Reservado (uso Banco) '
			),
			'NR18' => array(
				'pi' => 74,
				'pf' => 103,
				'rule' => 'numeric(1)',
				'description' => 'Nome da empresa '
			),
			'NR19' => array(
				'pi' => 104,
				'pf' => 183,
				'rule' => 'numeric(1)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR20' => array(
				'pi' => 184,
				'pf' => 191,
				'rule' => 'numeric(1)',
				'description' => 'Número do Retorno '
			),
			'NR21' => array(
				'pi' => 192,
				'pf' => 199,
				'rule' => 'numeric(1)',
				'description' => 'Data da gravação remessa/retorno '
			),
			'NR22' => array(
				'pi' => 200,
				'pf' => 240,
				'rule' => 'numeric(1)',
				'description' => 'Reservado (uso Banco) '
			)
		),
		'3' => array(
			'T' => array(
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
					'description' => 'Código de movimento'
				),
				'NR08' => array(
					'pi' => 18,
					'pf' => 21,
					'rule' => 'numeric(4)',
					'description' => 'Agência do Beneficiário'
				),
				'NR09' => array(
					'pi' => 22,
					'pf' => 22,
					'rule' => 'numeric(1)',
					'description' => 'Dígito da Agência do Beneficiário'
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
					'pf' => 40,
					'rule' => 'text(8)',
					'description' => 'Reservado (uso Banco)'
				),
				'NR13' => array(
					'pi' => 41,
					'pf' => 53,
					'rule' => 'numeric(13)',
					'description' => 'Identificação do título no Banco'
				),
				'NR14' => array(
					'pi' => 54,
					'pf' => 54,
					'rule' => 'numeric(1)',
					'description' => 'Código da carteira'
				),
				'NR15' => array(
					'pi' => 55,
					'pf' => 69,
					'rule' => 'text(15)',
					'description' => 'Nº do documento de cobrança '
				),
				'NR16' => array(
					'pi' => 70,
					'pf' => 77,
					'rule' => 'numeric(8)',
					'description' => 'Data do vencimento do título'
				),
				'NR17' => array(
					'pi' => 78,
					'pf' => 92,
					'rule' => 'numeric(8)',
					'description' => 'Valor nominal do título '
				),
				'NR18' => array(
					'pi' => 93,
					'pf' => 95,
					'rule' => 'numeric(8)',
					'description' => 'Nº do Banco Cobrador / Recebedor '
				),
				'NR19' => array(
					'pi' => 96,
					'pf' => 99,
					'rule' => 'numeric(8)',
					'description' => 'Agência Cobradora / Recebedora '
				),
				'NR20' => array(
					'pi' => 100,
					'pf' => 100,
					'rule' => 'numeric(8)',
					'description' => 'Dígito da Agência do Beneficiário '
				),
				'NR21' => array(
					'pi' => 101,
					'pf' => 125,
					'rule' => 'numeric(8)',
					'description' => 'Identif. do título na empresa '
				),
				'NR22' => array(
					'pi' => 126,
					'pf' => 127,
					'rule' => 'numeric(8)',
					'description' => 'Código da moeda'
				),
				'NR23' => array(
					'pi' => 128,
					'pf' => 128,
					'rule' => 'numeric(8)',
					'description' => 'Tipo de inscrição Pagador '
				),
				'NR24' => array(
					'pi' => 129,
					'pf' => 143,
					'rule' => 'numeric(8)',
					'description' => 'Número de inscrição Pagador '
				),
				'NR25' => array(
					'pi' => 144,
					'pf' => 183,
					'rule' => 'numeric(8)',
					'description' => 'Nome do Pagador '
				),
				'NR26' => array(
					'pi' => 184,
					'pf' => 193,
					'rule' => 'numeric(8)',
					'description' => 'Conta Cobrança '
				),
				'NR27' => array(
					'pi' => 194,
					'pf' => 208,
					'rule' => 'numeric(8)',
					'description' => 'Valor da Tarifa/Custas '
				),
				'NR28' => array(
					'pi' => 209,
					'pf' => 218,
					'rule' => 'numeric(8)',
					'description' => 'Identificação para rejeições, tarifas, custas, liquidações e baixas.'
				),
				'NR29' => array(
					'pi' => 219,
					'pf' => 240,
					'rule' => 'numeric(8)',
					'description' => 'Reservado (uso Banco)'
				)
			),
			'U' => array(
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
				'NR07' => array(
					'pi' => 16,
					'pf' => 17,
					'rule' => 'numeric(2)',
					'description' => 'Código de movimento (ocorrência)'
				),
				'NR08' => array(
					'pi' => 18,
					'pf' => 32,
					'rule' => 'numeric(1)',
					'description' => 'Juros / Multa / Encargos '
				),
				'NR09' => array(
					'pi' => 33,
					'pf' => 47,
					'rule' => 'numeric(15)',
					'description' => 'Valor do desconto concedido '
				),
				'NR10' => array(
					'pi' => 48,
					'pf' => 62,
					'rule' => 'numeric(15)',
					'description' => 'Valor do Abatimento Concedido/Cancelado '
				),
				'NR11' => array(
					'pi' => 63,
					'pf' => 77,
					'rule' => 'numeric(15)',
					'description' => 'Valor do IOF recolhido '
				),
				'NR12' => array(
					'pi' => 78,
					'pf' => 92,
					'rule' => 'numeric(15)',
					'description' => 'Valor pago pelo Pagador '
				),
				'NR13' => array(
					'pi' => 93,
					'pf' => 107,
					'rule' => 'numeric(15)',
					'description' => 'Valor liquido a ser creditado '
				),
				'NR14' => array(
					'pi' => 108,
					'pf' => 122,
					'rule' => 'numeric(15)',
					'description' => 'Valor de outras despesas '
				),
				'NR15' => array(
					'pi' => 123,
					'pf' => 137,
					'rule' => 'numeric(15)',
					'description' => 'Valor de outros créditos '
				),
				'NR16' => array(
					'pi' => 138,
					'pf' => 145,
					'rule' => 'numeric(15)',
					'description' => 'Data da ocorrência '
				),
				'NR17' => array(
					'pi' => 146,
					'pf' => 153,
					'rule' => 'numeric(15)',
					'description' => 'Data da efetivação do crédito '
				),
				'NR18' => array(
					'pi' => 154,
					'pf' => 157,
					'rule' => 'numeric(15)',
					'description' => 'Código da ocorrência do Pagador '
				),
				'NR19' => array(
					'pi' => 158,
					'pf' => 165,
					'rule' => 'numeric(15)',
					'description' => 'Data da ocorrência do Pagador '
				),
				'NR20' => array(
					'pi' => 166,
					'pf' => 180,
					'rule' => 'numeric(15)',
					'description' => 'Valor da ocorrência do Pagador '
				),
				'NR21' => array(
					'pi' => 181,
					'pf' => 210,
					'rule' => 'numeric(15)',
					'description' => 'Complemento da ocorrência do Pagador'
				),
				'NR22' => array(
					'pi' => 211,
					'pf' => 213,
					'rule' => 'numeric(15)',
					'description' => 'Código do Banco correspondente compens. '
				),
				'NR23' => array(
					'pi' => 214,
					'pf' => 240,
					'rule' => 'numeric(15)',
					'description' => 'Reservado '
				)
			),
			'Y' => array(
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
					'description' => 'Lote de serviço '
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
					'description' => 'Cód. segmento do registro detalhe '
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
					'description' => 'Código de movimento (ocorrência) '
				),
				'NR08' => array(
					'pi' => 18,
					'pf' => 19,
					'rule' => 'numeric(1)',
					'description' => 'Identificação Registro Opcional '
				),
				'NR09' => array(
					'pi' => 20,
					'pf' => 53,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR10' => array(
					'pi' => 44,
					'pf' => 87,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR11' => array(
					'pi' => 88,
					'pf' => 121,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR12' => array(
					'pi' => 122,
					'pf' => 155,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR13' => array(
					'pi' => 156,
					'pf' => 189,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR14' => array(
					'pi' => 190,
					'pf' => 223,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR15' => array(
					'pi' => 190,
					'pf' => 223,
					'rule' => 'numeric(1)',
					'description' => 'Identificação do Cheque '
				),
				'NR16' => array(
					'pi' => 224,
					'pf' => 240,
					'rule' => 'numeric(1)',
					'description' => 'Reservado'
				)
			)
		),
		'5' => array(
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
				'pf' => 17,
				'rule' => 'numeric(9)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR05' => array(
				'pi' => 18,
				'pf' => 23,
				'rule' => 'numeric(6)',
				'description' => 'Quantidade de registros do lote'
			),
			'NR06' => array(
				'pi' => 24,
				'pf' => 29,
				'rule' => 'numeric(6)',
				'description' => 'Quantidade títulos cobrança simples'
			),
			'NR07' => array(
				'pi' => 30,
				'pf' => 46,
				'rule' => 'text(211)',
				'description' => 'Valor total dos títulos cobrança simples '
			),
			'NR08' => array(
				'pi' => 47,
				'pf' => 52,
				'rule' => 'text(211)',
				'description' => 'Quantidade de títulos em cobrança vinculada '
			),
			'NR09' => array(
				'pi' => 47,
				'pf' => 52,
				'rule' => 'text(211)',
				'description' => 'Quantidade de títulos em cobrança vinculada '
			),
			'NR10' => array(
				'pi' => 53,
				'pf' => 69,
				'rule' => 'text(211)',
				'description' => 'Valor total dos títulos em cobrança vinculada '
			),
			'NR11' => array(
				'pi' => 70,
				'pf' => 75,
				'rule' => 'text(211)',
				'description' => 'Quantidade de títulos em cobrança caucionada '
			),
			'NR12' => array(
				'pi' => 76,
				'pf' => 92,
				'rule' => 'text(211)',
				'description' => 'Valor total dos títulos em cobrança caucionada '
			),
			'NR13' => array(
				'pi' => 93,
				'pf' => 98,
				'rule' => 'text(211)',
				'description' => 'Quantidade de títulos em cobrança descontada '
			),
			'NR14' => array(
				'pi' => 99,
				'pf' => 115,
				'rule' => 'text(211)',
				'description' => 'Valor total dos títulos em cobrança descontada '
			),
			'NR15' => array(
				'pi' => 116,
				'pf' => 123,
				'rule' => 'text(211)',
				'description' => 'Número do aviso de lançamento'
			),
			'NR16' => array(
				'pi' => 124,
				'pf' => 240,
				'rule' => 'text(211)',
				'description' => 'Reservado (uso Banco) '
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
			'NR04' => array(
				'pi' => 9,
				'pf' => 17,
				'rule' => 'numeric(9)',
				'description' => 'Reservado (uso Banco)'
			),
			'NR05' => array(
				'pi' => 18,
				'pf' => 23,
				'rule' => 'numeric(6)',
				'description' => 'Quantidade de lotes do arquivo'
			),
			'NR06' => array(
				'pi' => 24,
				'pf' => 29,
				'rule' => 'numeric(6)',
				'description' => 'Quantidade de registros do arquivo'
			),
			'NR07' => array(
				'pi' => 30,
				'pf' => 240,
				'rule' => 'text(211)',
				'description' => 'Reservado (uso Banco)'
			)
		)  
	)
)
?>