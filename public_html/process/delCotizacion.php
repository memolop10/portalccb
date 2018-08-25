<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
	if($btn=="eliminar"){
	$cod=$_POST["num-cotizaciones"];
//	$sql="delete from cotizaciones where Numero='$code'";
	$sql=consultasSQL::DeleteSQL('cotizaciones', "Numero='".$pedidoD['Numero']."'");
		echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">El producto se elimino de la tienda con éxito</p>';
	}
	    else{
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}
?>