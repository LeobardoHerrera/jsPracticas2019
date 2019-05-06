<?php
//se manda llamar la conexion
include("../conexion/conexion.php");


//RECIBE VARIABLES AJAX
$nombre    = $_POST["nombre"];
$paterno   = $_POST["paterno"];
$materno   = $_POST["materno"];
$direccion = $_POST["direccion"];
$telefono  = $_POST["telefono"];
$fecha_nac = $_POST["fecha_nac"];
$correo    = $_POST["correo"];
$tipo      = $_POST["tipo"];
$sexo      = $_POST["sexo"];
$idPersona=$_POST["id"];

$nombre    =trim($nombre);
$paterno   =trim($paterno);
$materno   =trim($materno);
$direccion =trim($direccion);
$telefono  =trim($telefono);
$correo    =trim($correo);
$tipo      =trim($tipo);
$sexo      =trim($sexo);

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("UPDATE personas SET  
 								
 								nombre='$nombre',
 								ap_paterno='$paterno',
 								ap_materno='$materno',
 								sexo='$sexo',
 								direccion='$direccion',
 								telefono='$telefono',
 								fecha_nacimiento='$fecha_nac',
 								correo='$correo',
 								tipo_persona='$tipo',
 								fecha_registro='$fecha',
 								hora_registro='$hora',
 								id_registro='1'
 								
								WHERE id_persona='$idPersona'
							",$conexion)or die(mysql_error());

?>