<?php
	$numero1=$_POST['num1'];
	$nu1=$numero1;
	$numero2=$_POST['num2'];
	$nu2=$numero2;
	$operar=$_POST['evaluar'];
	function calculadora($n1, $n2, $opr){
		switch ($opr) {
			case 'suma':
				$re=$n1 + $n2;
				echo "el resultado de la suma es:".$re;
				break;
				case 'resta':
				$re=$n1 - $n2;
				echo "el resultado de la suma es:".$re;
				break;
				case 'nulti':
				$re=$n1 * $n2;
				echo "el resultado de la suma es:".$re;
				break;
				case 'divi':
				$re=$n1 / $n2;
				echo "el resultado de la suma es:".$re;
				break;
		
		}
		return; 
	}
		
    
?>