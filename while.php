<?php
// imprimir los numeros del 1 al 10
$num = 1;

while (num <= 10) {
	echo "numero:".$num." <br>";
	$num ++;
}
//sumar los numeros del 1 al 100
$nu1 = 1;
$nu2 = 1;
$resul;
while ( nu1< 100) {
	$resul = $nu1 + $nu2;
	echo $nu1."+".$nu2."=".$resul."<br>";
	$nu1++; 
}

//sumar los numeros pares del 1 al 50 
$p = 1;
$co = 2;
$re;
while ($p < 50) {
	if ($p % 2==0) {
		$re = $p "+"$co;
		echo $p."+".$co."=".$re;
		$p++;
	}		else {
				echo"el numero".$p."no es un numero par";
					$p++;
		}
	
}
//sumar los numeros impares del 1 al 50
$impares = 1;
	$p = 1;
	$resut;

	while ($impares < 50) {
		if ($impares % 1 == 0 && $impares% $impares ==0) {
			$resut = $impares + $p;
			echo $impares." + ".$p." = ".$resut."<br>";
			$impares++;
		} else {
			echo "El numero".$impares."es un numero impar.<br>";
			$impares++;
		}
	}
	
