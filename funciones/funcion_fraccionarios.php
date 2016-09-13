<?php
	$numera1=$_POST['num1'];
	$nu1=(float)$numera1;
	$numera2=$_POST['num2'];
	$nu2=(float)$numera2;
	$denominador1=$_POST['denom1'];
	$denomi1=(float)$denominador1;
	$denominador2=$_POST['denom2'];
	$denomi2=(float)$denominador2;
	$operacion=$_POST['evaluar'];
	function calculadora_fraccionarios($num1, $num2, $dem1, $dem2, $ope){
		switch ($ope) {
			case 'suma':
				$ren = $num1 * $dem2 + $num2 * $dem1;
				$red = $dem1 * $dem2;
				echo " el resultado fraccion es: ",$ren,"/",$red;
				break;
				case 'resta':
				$ren = $num1 * $dem2 -$num2 * $dem1;
				$red = $dem1 * $dem2;
				echo " el resultado fraccion es: ",$ren,"/",$red;
				break;
				case 'multi':
				$red = $dem1 * $dem2;
				$ren = $num1 * $num2;			
				echo " el resultado fraccion es: ",$ren,"/",$red;
				break;
				case 'divi':
				$red = $dem1 * $num2;
				$ren = $num1 * $dem2;			
				echo " el resultado fraccion es: ",$ren,"/",$red;
				break;
		
		}
	}
$resultado=calculadora_fraccionarios($nu1, $nu2, $denomi1, $denomi2, $operacion);
echo"$resultado";
		
		
?>