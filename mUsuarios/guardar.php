<?php
//se manda llamar la conexion
include("../conexion/conexion.php");
$idPersona = $_POST["idPersona"];
$usuario   = $_POST["usuario"];
$contra    = $_POST["contra"];
$idPersona = trim($idPersona);
$usuario   = trim($usuario);
$contra    = trim($contra);
$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");
mysql_query("SET NAMES utf8");
 $insertar = mysql_query("INSERT INTO usuarios 
 								(
 								id_persona,
 								usuario,
 								contra,
 								id_registro,
 								fecha_registro,
 								hora_registro,
 								activo
 								)
							VALUES
								(
 								'$idPersona ',
 								'$usuario',
 								'$contra ',
 								'1',
 								'$fecha',
 								'$hora',
 								'1'
								)
							",$conexion)or die(mysql_error());
?>