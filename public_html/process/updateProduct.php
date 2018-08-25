<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];
$catProdUp=$_POST['prod-category'];
$priceProdUp=$_POST['price-prod'];
$modelProdUp=$_POST['unidad-peso'];
$stockProdUp=$_POST['stock-prod'];
$proveProdUp=$_POST['prod-Prove'];

if(consultasSQL::UpdateSQL("productos", "codigo_producto='$codeProdUp',nombre_producto='$nameProdUp',CodigoCat='$catProdUp',precio_producto='$priceProdUp',id_peso='$modelProdUp',Stock='$stockProdUp',NITProveedor='$proveProdUp'", "codigo_producto='$codeOldProdUp'")){
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