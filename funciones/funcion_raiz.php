<?php
	$numero1=$_POST['numero'];
	$num=(float)$numero1;
	
	function raiz($n1){
		$raiz= sqrt($n1);
		return $raiz; 
	}
		$re=raiz($num);
		echo "la raiz cuadrada del numero ingresado es:"  .$re. "<br>";
	
?>    