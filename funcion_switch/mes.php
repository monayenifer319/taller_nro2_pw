<?php
echo "<h1>mes</h1><br><br>";
switch (date("Fe")) {
	case "January":
		$mes="Enero";
		break;
	case "Febrary":
		$mes="Febrero";
		break;
	case "March":
		$mes="Marzo";
		break;
	case "April":
		$mes="Abril";
		break;
	case "May":
		$mes="Mayo";
		break;
	case "June":
		$mes="Junio";
		break;
	case "july":
		$mes="Julio";
		break;
	case "August":
		$mes="Agosto";
		break;
	case "September":
		$mes='Septiembre';
		break;
		case "October":
		$mes="Octubre";
		break;
		case "November":
		$mes="noviembre";
		break;
		case "December":
		$mes="diciembre";
		break;
	
	
	
}
 echo "el mes correspondiente es ".$mes;
	
?>