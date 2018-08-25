<?php
session_start();
require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos




if (isset($_GET['candidatos']))
{
$candidatos=intval($_GET['candidatos']);
$NumOf=$_SESSION['carpeta'];
$IDCand=$candidatos;
	
$CandPerf=  mysqli_query($con, "
select * 
from 
candidatos 
where 
ID='".$IDCand."'
");
$PerfilCV=mysqli_fetch_array($CandPerf);

$sql=mysqli_query($con, "select VecesVisto from candidatos where ID='$IDCand' ");
$rw=mysqli_fetch_array($sql);
$Numveces=$rw['VecesVisto']+1;

if(mysqli_query($con, "candidatos", 
"VecesVisto='$Numveces'
", 
"ID='$IDCand'")){}

?>

<div class="col-md-5" style="z-index: 2000000">
<button style="margin-left: -25px; float: left; position: fixed;" onClick="document.getElementById('candidatosCV').style.display='none';" type="button" class="close pull-left" aria-label="Close">
<span aria-hidden="true">X</span></button>&nbsp;
<div class="box box-danger" style="margin-top: -20px;">
<div class="box-body box-profile">
<img class="profile-user-img img-responsive img-circle" src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/<?php echo $PerfilCV['Foto']; ?>" alt="User profile picture">
<h3 class="profile-username text-center"><?php echo ' '.$PerfilCV['PuestoPT'].' '; ?></h3>
<p class="text-muted text-center"><?php echo 'Mensual &nbsp;&nbsp;$ '.$PerfilCV['SalarioMPT'].' '; ?></p>
<ul class="list-group list-group-unbordered">
<li class="list-group-item">
<b><?php echo ' '.$PerfilCV['AreaPT'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo ' '.$PerfilCV['SituacionLPT'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo ' '.$PerfilCV['EstadoCivil'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo ' '.$PerfilCV['Genero'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo 'Discapacidades:&nbsp;&nbsp; '.$PerfilCV['Discapacidades'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo ' '.$PerfilCV['EstadoPT'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo 'Disponibilidad para viajar &nbsp;&nbsp; '.$PerfilCV['ViajarPT'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo 'Disponibilidad para cambio de residencia &nbsp;&nbsp; '.$PerfilCV['CambioDPT'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo 'Vehículo propio &nbsp;&nbsp; '.$PerfilCV['Vehiculo'].' '; ?></b> <a class="pull-right"></a>
</li>
<li class="list-group-item">
<b><?php echo 'Permiso de conducir &nbsp;&nbsp; '.$PerfilCV['Licencia'].' '; ?></b> <a class="pull-right"></a>
</li>


</ul>

<?php 
$sql33=mysqli_query($con, "select ContactoDesb from Postulados where (IDcandidato=".$IDCand." and OfertaPublicada=".$NumOf.") ");
$rw33=mysqli_fetch_array($sql33);
if($rw33['ContactoDesb']==""){
	echo'
<form name="VerContacto" method="post" action="https://empleosccb.com.mx/process/postularCan.php/">
<input name="idCANdidato" value="'.$IDCand.'" class="hidden">
<input name="numOFERta" value=" '.$NumOf.'" class="hidden">
<input name="Fecha" value=" '.date("d-m-Y").'" class="hidden">
<input name="Visto" value="si" class="hidden">
<input name="Gestionando" value="si" class="hidden">
<input name="Desb" value="si" class="hidden">
<button type="submit" name="VerContacto" class="btn btn-primary btn-block">Ver Contacto</button>
	</form>
</div>

</div>
	';	
		
	}else{
		if($rw33['ContactoDesb']=="si"){
		echo ' 
	
</div>

</div>
	<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title">Contacto</h3><br>
</div>
<div class="box-body">
<strong><i class="fa fa-book margin-r-5"></i> Nombre</strong>
<p class="text-muted">
'.$PerfilCV['NombreReal'].'&nbsp;&nbsp;'.$PerfilCV['Apellidos'].' 
</p>
<hr>
<strong><i class="fa fa-map-marker margin-r-5"></i> Email</strong>
<p class="text-muted">
'.$PerfilCV['Email'].'
</p>
<hr>
<strong><i class="fa fa-pencil margin-r-5"></i> Telefono</strong>
<p>
 '.$PerfilCV['Tel1'].'
</p>
<hr>
<strong><i class="fa fa-file-pdf-o margin-r-5"></i> Curruculum .pdf</strong>
<p>
<h3 class="box-title"><form method="post" action="https://empleosccb.com.mx/Candidatos/PDFcandidatos/bajarpdfEmpresa.php" name="bajar">
<input name="linkCV" class="hidden" value="'.$PerfilCV['Email'].'">
<button type="submit" class="btn btn-green" title="Revisa su PDF" name="bajar">Ver &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></button>
</form></h3>
</p>
</div>
</div>
	
	
	';
		
	}
	}

		
?>




</div>

</div>
</div>                 
<div class="col-md-7" style="z-index: 2000000">
<div class="box box-danger">

<div class="box box-solid">



<div class="box-header with-border">

<h3 class="box-title"><?php echo ' '.$PerfilCV['AreaPT'].' '; ?></h3>
</div>

<div class="box-body">
<blockquote>
<p><?php echo ' '.$PerfilCV['PuestoPT'].' '; ?>.</p>
<small><cite title="Source Title"><?php echo ' '.$PerfilCV['DescPP'].' '; ?></cite></small>
</blockquote>
</div>

<div class="box-header with-border">

<h3 class="box-title">Experiencia profesional</h3>
</div>

<div class="box-body">
<blockquote>
<?php
$EXPp=  mysqli_query($con, "
SELECT * 
FROM 
exp_profesional
WHERE 
IDCandidato='".$IDCand."'");
while($ExpProff=mysqli_fetch_array($EXPp)){
echo '   
<p> '.$ExpProff['Cargo'].'.</p>
<small><cite title="Source Title">
 '.$ExpProff['Empresa'].' /
 '.$ExpProff['Area'].' /
 '.$ExpProff['Giro'].' 
</cite></small>
<small><cite title="Source Title">
Desde:&nbsp;&nbsp; '.$ExpProff['Desde'].' /
Hasta:&nbsp;&nbsp; '.$ExpProff['Hasta'].'
</cite></small>
<small><cite title="Source Title">
 '.$ExpProff['Funciones'].'
</cite></small>	
';	
}
?>
</blockquote>
</div>



<div class="box-header with-border">

<h3 class="box-title">Formación</h3>
</div>


<div class="box-body">
<blockquote>
<p><?php echo ' '.$PerfilCV['PuestoPT'].' '; ?>.</p>
<small><cite title="Source Title"><?php echo ' '.$PerfilCV['DescPP'].' '; ?></cite></small>
<?php
$FORMp=  mysqli_query($con, "
SELECT * 
FROM 
formacion
WHERE 
IDCandidato='".$IDCand."'");
while($FORMProff=mysqli_fetch_array($FORMp)){
echo '   
<p> '.$FORMProff['CentroE'].'.</p>
<small><cite title="Source Title">
 '.$FORMProff['NivelE'].' /
 '.$FORMProff['Estado'].' 
</cite></small>
<small><cite title="Source Title">
Desde:&nbsp;&nbsp; '.$FORMProff['Desde'].' /
Hasta:&nbsp;&nbsp; '.$FORMProff['Hasta'].'
</cite></small>	
';	
}
?>
</blockquote>
</div>




</div>






</div>          
</div>            

	 


<?php
	
}