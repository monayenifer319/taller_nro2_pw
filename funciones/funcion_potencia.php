<?php
	$numero1=$_POST['num1'];
	$nu1=$numero1;
	$numero2=$_POST['num2'];
	$nu2=$numero2;
	function operation($n1,$n2){
		$potencia= pow($n1,$n2);
		return $potencia; 
	}
		$resultado=operation($nu1,$nu2);
		echo "".$nu1." ^ " .$nu2. " = " ,$resultado, "<br>";
?>