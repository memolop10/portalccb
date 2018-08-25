<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(1);

$ID_user=$_POST['IDCandidato'];

$puestopt=$_POST['puestopt'];
$situacionlpt=$_POST['situacionlpt'];
$areapt=$_POST['areapt'];
$salariompt=$_POST['salariompt'];
$estadopt=$_POST['estadopt'];
$viajarpt=$_POST['viajarpt'];
$cambiodpt=$_POST['cambiodpt'];

if(consultasSQL::UpdateSQL("candidatos", 
"PuestoPT='$puestopt',
SituacionLPT='$situacionlpt',
AreaPT='$areapt',
SalarioMPT='$salariompt',
EstadoPT='$estadopt',
ViajarPT='$viajarpt',
CambioDPT='$cambiodpt'", 

"Email='$ID_user'")){
    
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}else{
    echo '
    <br>
    
    <p><strong>Error</strong></p> ';
	sleep(3);
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}