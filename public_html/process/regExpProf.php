<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(0);

$ID_user=$_POST['IDCandidato'];

$empresa=$_POST['empresa'];
$giro=$_POST['giro'];
$area=$_POST['area'];
$cargo=$_POST['cargo'];
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];
$funciones=$_POST['funciones'];


if(consultasSQL::InsertSQL("exp_profesional", "Empresa, Giro, Area, Cargo, Desde, Hasta, Funciones, Candidato", "'$empresa','$giro','$area','$cargo','$desde','$hasta','$funciones','$ID_user'")){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}else{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}
