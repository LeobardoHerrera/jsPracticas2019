<?php
//se manda llamar la conexion
include("../conexion/conexion.php");


//RECIBE VARIABLES AJAX
$usuario = $_POST["usuario"];
$contra  = $_POST["contra"];
$ide     = $_POST["ide"];

$usuario    =trim($usuario);
$contra   =trim($contra);


$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("UPDATE usuarios SET  
 								
 								usuario='$usuario',
 								contra='$contra',
 								fecha_registro='$fecha',
 								hora_registro='$hora',
 								id_registro='1'
 								
								WHERE id_usuario='$ide'
							",$conexion)or die(mysql_error());

?>