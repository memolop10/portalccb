<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(1);

$ID_user=$_POST['IDCandidato'];

$centroe=$_POST['centroe'];
$nivele=$_POST['nivele'];
$estado=$_POST['estado'];
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];

if(consultasSQL::InsertSQL("formacion", "CentroE, NivelE, Estado, Desde, Hasta, Candidato", "'$centroe','$nivele','$estado','$desde','$hasta','$ID_user'")){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}else{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}
