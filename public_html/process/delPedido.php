<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$NumPedidoDel= $_POST['num-pedido'];
$consP=  ejecutarSQL::consultar("select * from pedidos where numero_pedido='$NumPedidoDel'");
$totalP= mysql_num_rows($consP);

if($totalP>0){
    if(consultasSQL::DeleteSQL('pedidos', "numero_pedido='".$NumPedidoDel."'")){
        consultasSQL::DeleteSQL("detalle_pedido", "numero_pedido='".$NumPedidoDel."'");
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Pedido eliminado éxitosamente</p>';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El pedido no existe</p>';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}
