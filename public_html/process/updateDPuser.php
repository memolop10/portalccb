<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(0);

$ID_user=$_POST['IDCandidato'];

$nombreR=$_POST['nombreR'];
$apellidoR=$_POST['apellidoR'];
$Nacio=$_POST['Nacio'];
$Genero=$_POST['Genero'];
$EstadoCivil=$_POST['EstadoCivil'];
$Tel1CV=$_POST['Tel1CV'];
$Tel2CV=$_POST['Tel2CV'];
$PaisCV=$_POST['PaisCV'];
$EstadoCV=$_POST['EstadoCV'];
$CDDeleg=$_POST['CDDeleg'];
$CP=$_POST['CP'];
$Direccion=$_POST['Direccion'];
$Nacionalidad=$_POST['Nacionalidad'];
$Licencia=$_POST['Licencia'];
$Vehiculo=$_POST['Vehiculo'];
$Discapacidad=$_POST['Discapacidad'];


if(consultasSQL::UpdateSQL("candidatos", 
"NombreReal='$nombreR',
Apellidos='$apellidoR',
FechaNacio='$Nacio',
Genero='$Genero',
EstadoCivil='$EstadoCivil',
Tel1='$Tel1CV',
Tel2='$Tel2CV',
Pais='$PaisCV',
Estado='$EstadoCV',
CdDeleg='$CDDeleg',
CP='$CP',
Direccion='$Direccion',
Nacionalidad='$Nacionalidad',
Licencia='$Licencia',
Vehiculo='$Vehiculo',
Discapacidades='$Discapacidad'
", 

"Email='$ID_user'")){
    	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
}