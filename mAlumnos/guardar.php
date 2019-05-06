<?php
//se manda llamar la conexion
include("../conexion/conexion.php");
$idPersona = $_POST["idPersona"];
$idCarrera = $_POST["idCarrera"];
$noControl = $_POST["noControl"];
$idPersona = trim($idPersona);
$idCarrera = trim($idCarrera);
$noControl = trim($noControl);
$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");
mysql_query("SET NAMES utf8");
 $insertar = mysql_query("INSERT INTO alumnos 
 								(
 								id_persona,
 								id_carrera,
 								no_control,
 								id_registro,
 								fecha_registro,
 								hora_registro,
 								activo
 								)
							VALUES
								(
 								'$idPersona ',
 								'$idCarrera',
 								'$noControl ',
 								'1',
 								'$fecha',
 								'$hora',
 								'1'
								)
							",$conexion)or die(mysql_error());
?>