<?php 

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// Inicio Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					// Inicio Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					// Término Gerente de Vendas
				)
			),
			// Término Diretor Comercial

			// Inicio Diretor Finanaceiro
			array(
				'nome_cargo' => 'Diretor Finanaceiro',
				'subordinados' => array(
					// Inicio Gerente de Contas à Pagar
					array(
						'nome_cargo' => 'Gerente de Contas à Pagar',
						'subordinados' => array(
							// Inicio Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							// Término Supervisor de Pagamentos
						)
					),
					// Término Gerente de Contas à Pagar

					// Inicio Gerente de Compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							// Inicio Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
							// Término Supervisor de Suprimentos
						)
					)
					// Término Gerente de Compras
				)
			)
			// Término Diretor Finanaceiro
		) 
	)
);

function exibe($cargos) {
	$html =  '<ul>';

	foreach ($cargos as $cargo) {
		$html .= '<li>';

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);

 ?>