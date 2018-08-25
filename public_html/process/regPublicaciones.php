<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(1);

$puesto=$_POST['Puesto'];
$salario=$_POST['Salario'];
$area=$_POST['Area'];
$categ=$_POST['Categoria'];
$empresa=$_POST['Empresa'];
$jornada=$_POST['jornada'];
$descOf=$_POST['DescOf'];
$ciudad=$_POST['Ciudad'];
$dir=$_POST['direcc'];
$disc=$_POST['discapacitados'];
$fp=$_POST['FechaP'];
$ft=$_POST['FechaTerminacion'];
$nf=$_POST['NFactura'];
$e=$_POST['Estatus'];





if(consultasSQL::InsertSQL("ofertas", "fecha_publicacion, Fecha_Terminacion, salario, tipo_contrato, area, discapacidad, categoria, ciudad, Empresa, puesto, descripcionOf, NumFactura, Estatus", "'$fp','$ft','$salario','$jornada','$area','$disc','$categ','$ciudad','$empresa','$puesto','$descOf','$nf','$e'")){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Empresas/Avisos\">";
}else{
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Empresas/Avisos\">";
}
