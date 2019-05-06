<?php
//se manda llamar la conexion
include("../conexion/conexion.php");

//RECIBE VARIABLES AJAX
$idUser    = $_POST["idUser"];


$fecha =date("Y-m-d"); 
$hora  =date ("H:i:s");

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("UPDATE usuarios SET  
 								
 								contra='12345',
 								fecha_registro='$fecha',
 								hora_registro='$hora',
 								id_registro='1'
 								
								WHERE id_usuario='$idUser'
							",$conexion)or die(mysql_error());

?>