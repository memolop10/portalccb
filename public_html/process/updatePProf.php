<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$ID_user=$_POST['IDCandidato'];

$cargopp=$_POST['cargopp'];
$descpp=$_POST['descpp'];

if(consultasSQL::UpdateSQL("candidatos", 
"CargoPP='$cargopp',
DescPP='$descpp'", 

"Email='$ID_user'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/demo/Candidatos/Perfil.php\">";
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/demo/Candidatos/Registro.php\">";
}