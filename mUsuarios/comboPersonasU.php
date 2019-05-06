<?php 
include "../conexion/conexion.php";

mysql_query("SET NAMES utf8");
$consulta = mysql_query("SELECT
							personas.id_persona,
							CONCAT(
								personas.ap_paterno,
								' ',
								personas.ap_materno,
								' ',
								personas.nombre
							) AS Persona
						FROM
							usuarios
						INNER JOIN personas ON usuarios.id_persona = personas.id_persona
						WHERE
							personas.activo = 1",$conexion)or die(mysql_error());
 ?>
 	<option value="0">Seleccione...</option>
 <?php 

while ($row=mysql_fetch_row($consulta))
 {
	?>	
		<option value="<?php echo	$row[0]; ?>"><?php echo $row[1]; ?></option>
	<?php 
}

?> 
