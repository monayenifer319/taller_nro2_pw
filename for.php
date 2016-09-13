<?php  
	//a)Imprimir los números del 1 al 100
	echo "<br>i Programa que Imprime los números del 1 al 100 <br>";
	$i;
	for ($i=0; $i<=100; $i++)
		echo "<br>".$i;
  //b) Imprimir las tablas de multiplicar de un número del 1 al
	echo "<br>Programa que imprime las tablas de multiplicar de un número del 1 al 20<br>";
	$j=20;
	
	for ($i=1; $i<=20; $i++){
			echo $j. " * ".$i." = " .$i*$j;
			echo"<br>";
		}
		
		
   //C)  Solucionar el factorial de un número
	echo "<br>programa que soluciona el factorial de un número<br>";
	$num1= 5;
	$fact = 1;
	echo "Factorial ".$num1." = ";
	for ($i=1; $i<=$num1; $i++) { 
		$fact = $fact*$i;
	}
	
	echo $fact;
	//d) Solucionar el numero de Fibonacci
	echo "<br><br>Solucionar el numero de Fibonacci<br><br>";
  $an=0;
  $actu=1; 
  $b; 
  $num=10;  
  $i; 
  echo $an." <br>"; 
  for ($i=0; $i<$num;$i++){ 
  echo $actu." <br>" ; 
  $b=$actu; 
  $actu=$actu+$an; 
  $an = $b; 
 }
 /*b..
	echo "<br>Crear un programa que devuelva el código ascii de un número ingresado del 0 al 9 <br>";
	switch ($numero) {
		case 'acci':
				for($i=0; $i<=9 ; $i++ )
	
	   echo"El codigo ASCII de la numero" + $numero + " es: " + $i;
		
			break;
		
		
	}
	*/
	?>