<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(0);

$emailcliente=$_POST['EmailCliente'];
$RazonSocial=$_POST['Razonsocial'];
$area=$_POST['Direccion'];
$Rfc=$_POST['RFC'];
$telefono=$_POST['Telefono'];
$ofertA=$_POST['Oferta'];
$numPedido=$_POST['NumPedido'];
$costO=$_POST['Costo'];
$fechA=$_POST['Fecha'];
$estatuS=$_POST['Estatus'];
$metodoPago=$_POST['FormadePago'];


if(consultasSQL::InsertSQL("Facturas", "Email, RazonS, Direccion, RFC, Telefono, Paquete, NumFactura, Importe, Fecha, Estado, FormadePago", "'$emailcliente','$RazonSocial','$area','$Rfc','$telefono','$ofertA','$numPedido','$costO','$fechA','$estatuS','$metodoPago'")){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Empresas/Panel/\">";
}else{
	echo "Se Produjo un Herror, Por favor intente nuevamente o Revise su Panel Principal";
}
