<?php

//Puxa os dados definidos nos input do .html
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//altera o nome do mes para minusculo para que seja possível verificar.
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$mes = strtolower($_POST['mes']);
	}
	/*$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$n4 = $_POST['n4'];
	$n5 = $_POST['n5'];
	$n6 = $_POST['n6'];
	$n7 = $_POST['n7'];
	$n8 = $_POST['n8'];
	$n9 = $_POST['n9'];
	$n10 = $_POST['n10'];
	$n11 = $_POST['n11'];
	$n12 = $_POST['n12'];*/
	for ($i=1; $i <= 12; $i++) { 
		$nome = (string)$_POST['n' . $i];
		$valor = floatval($_POST['c' . $i]);

		//Verifica se contém algum conteúdo dentro das váriaveis.
		require 'verificaDados.php';
	}	
	/*$c1 = floatval($_POST['c1']);
	$c2 = floatval($_POST['c2']);
	$c3 = floatval($_POST['c3']);
	$c4 = floatval($_POST['c4']);
	$c5 = floatval($_POST['c5']);
	$c6 = floatval($_POST['c6']);
	$c7 = floatval($_POST['c7']);
	$c8 = floatval($_POST['c8']);
	$c9 = floatval($_POST['c9']);
	$c10 = floatval($_POST['c10']);
	$c11 = floatval($_POST['c11']);
	$c12 = floatval($_POST['c12']);*/

	//Verifica se contém algum dos meses.
	if ($mes === 'janeiro' || $mes === 'fevereiro' || $mes === 'março' || $mes === 'abril' || $mes === 'maio' || $mes === 'junho' || $mes === 'julho' || $mes === 'agosto' || $mes === 'setembro' || $mes === 'outubro' || $mes === 'novembro' || $mes === 'dezembro') {
			
			$soma = array_sum($valores);

			$mes = ucfirst($mes);

			echo $mes . " - 2023<br>";

			for ($i = 0; $i < count($nomes); $i++) {
            	echo $nomes[$i] . " - " . $valores[$i] . "<br>";
     	    }
			/*imprimirValor($n1, $c1);
			imprimirValor($n2, $c2);
			imprimirValor($n3, $c3);
			imprimirValor($n4, $c4);
			imprimirValor($n5, $c5);
			imprimirValor($n6, $c6);
			imprimirValor($n7, $c7);
			imprimirValor($n8, $c8);
			imprimirValor($n9, $c9);
			imprimirValor($n10, $c10);
			imprimirValor($n11, $c11);
			imprimirValor($n12, $c12);*/
			echo "Total a ser pago é de: " . $soma . ".<br>";
		
	} else {
		echo '<script type="text/javascript">';
   		echo 'alert("Informe o mês!");';
   		echo 'window.history.back();';
    	echo '</script>';
	}

}

?>