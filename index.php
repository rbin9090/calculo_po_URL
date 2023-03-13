<?php

$valor1 = $_GET['valor1'];

$sinal = $_GET['sinal'];
$valor2 = $_GET['valor2'];

if ($sinal == 'mais'){
	$resultado = $valor1 + $valor2;
}else if($sinal == 'menos'){
	$resultado = $valor1 - $valor2;
}

echo $resultado;
//para fazer o cálculo basta passar os seguintes parametros pela url: 
//?valor1=18&valor2=18&sinal=mais



/*
$valor = $_GET['valor'];

$sinal = $_GET['sinal'];

$resultado = 0;

if ($sinal == 'mais'){
	foreach ($valor as $key => $value) {
		$resultado+=$value;
	}
}else if($sinal == 'menos'){
		foreach ($valor as $key => $value) {
		$resultado-=$value;
	}
}

echo $resultado;

//?valor[]=10&valor[]=20$sinal=mais
*/
?>