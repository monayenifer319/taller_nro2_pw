<?php 
$voc=$_POST['vocal'];
switch ($voc) {
	case 'a':
		echo"el codigo es: 97";
		break;
	case 'e':
		echo"el codigo es: 101";
		break;
	case 'i':
		echo"el codigo es: 105";
		break;
	case 'o':
		echo"el codigo es: 111";
		break;
	case 'u':
		echo"el codigo es: 117";
		break;
	case 'A':
		echo"el codigo es: 65";
		break;
	case 'E':
		echo"el codigo es: 69";
		break;
	case 'I':
	    echo"el codigo es: 73";
		break;
	case 'O':
		echo"el codigo es: 99";
		break;
	case 'U':
		echo"el codigo es: 85";
		break;
	default:
		echo "error!! no corresponde a una vocal";
		break;
	
}
 ?>