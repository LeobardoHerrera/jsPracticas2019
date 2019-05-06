<?php
//se manda llamar la conexion
include("../conexion/conexion.php");



//RECIBE VARIABLES AJAX
$valor = $_POST["valor"];
$id    = $_POST["id"];


$fecha =date("Y-m-d"); 
$hora  =date ("H:i:s");

$valor =($valor==1)?0:1;

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("UPDATE usuarios SET  
 								
 								activo='$valor',
 								fecha_registro='$fecha',
 								hora_registro='$hora',
 								id_registro='1'
 								
								WHERE id_usuario='$id'
							",$conexion)or die(mysql_error());

?>