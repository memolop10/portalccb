<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(0);

$ID_user=$_POST['EmailE'];

$nombreR=$_POST['NomUser'];
$apellidoR=$_POST['RazonS'];
$Nacio=$_POST['RFC'];
$EstadoCivil=$_POST['direcc'];
$Tel1CV=$_POST['Tel'];

if(consultasSQL::UpdateSQL("empresas", 
"Nombre='$nombreR',
RazonS='$apellidoR',
RFC='$Nacio',
Direccion='$EstadoCivil',
Telefono='$Tel1CV'
", 

"Email='$ID_user'")){
    	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Empresas/Panel\">";
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Empresas/Panel\">";
}