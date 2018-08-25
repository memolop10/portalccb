<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

	//Variables recibidas por POST de nuestra conexión AJAX
	$equipo = $_POST['equipo'];

	//Variable donde recogemos el resultado de la consulta
	$nombre_jugador = null;

	//Realizamos la consulta a la base de datos
	$query = 'SELECT cotizacion FROM Nombre WHERE equipo = "'.$equipo.'" ';
	$select = mysql_query($query, $conexion) or die('Error'.mysql_error());

	while ($valor = mysql_fetch_assoc($select)){
		$nombre_jugador = $valor['Cantidad'];
	}

	//Mostramos el resultado. Este 'echo' será el que recibirá la conexión AJAX
	echo $nombre_jugador;

?>

