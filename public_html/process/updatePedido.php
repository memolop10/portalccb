<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$numPediUp=$_POST['num-pedido'];
$estadPediUp=$_POST['pedido-status'];


if(consultasSQL::UpdateSQL("pedidos", "id_estado='$estadPediUp'", "numero_pedido='$numPediUp'")){                
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}