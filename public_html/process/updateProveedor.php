<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$nitOldProveUp=$_POST['nit-prove-old'];
$nitProveUp=$_POST['nit-prove'];
$nameProveUp=$_POST['prove-name'];
$dirProveUp=$_POST['prove-dir'];
$telProveUp=$_POST['prove-tel'];
$webProveUp=$_POST['prove-web'];

if(consultasSQL::UpdateSQL("proveedor", "NITProveedor='$nitProveUp',NombreProveedor='$nameProveUp',Direccion='$dirProveUp',Telefono='$telProveUp',PaginaWeb='$webProveUp'", "NITProveedor='$nitOldProveUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}