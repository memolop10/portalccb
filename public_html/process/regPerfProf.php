<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(0);

$ID_user=$_POST['IDCandidato'];

$carGO=$_POST['cargopp'];
$descBre=$_POST['descpp'];




if(consultasSQL::InsertSQL("perfil_prof", "Cargo, DescB, Candidato", "'$carGO','$descBre','$ID_user'")){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}else{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}
