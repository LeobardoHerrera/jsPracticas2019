<?php
//se manda llamar la conexion
include("../conexion/conexion.php");
$nombre      = $_POST["nombre"];
$abreviatura = $_POST["abreviatura"];

$nombre      =trim($nombre);
$abreviatura =trim($abreviatura);


$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("INSERT INTO carreras 
 								(
 								nombre,
 								abreviatura,
 								img_representativa,
 								id_registro,
 								fecha_registro,
 								hora_registro,
 								activo
 								)
							VALUES
								(
 								'$nombre',
 								'$abreviatura',
 								'x',
 								'1',
 								'$fecha',
 								'$hora',
 								'1'
								)
							",$conexion)or die(mysql_error());
?>