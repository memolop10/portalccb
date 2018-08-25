<?php
session_start();
require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos


if (isset($_POST['paquetes'])){$paquetes=$_POST['paquetes'];}
if (isset($_POST['avisos'])){$avisos=$_POST['avisos'];}
if (isset($_POST['suscritos'])){$suscritos=$_POST['suscritos'];}

if (isset($_POST['candidatos'])){$candidatos=$_POST['candidatos'];}


if (!empty($flete) and !empty($maniobra))
{

exit();
}

if (isset($_GET['suscritos']))//codigo elimina un elemento del array
{
$suscritos=intval($_GET['suscritos']);
if ($suscritos == 0){exit();}
$_SESSION['carpeta'] = $suscritos;
?>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-2">
<div class="input-group margin">
<h4 class="text-black text-center" id="myModalLabel">Áreas</h4>
</div>
<div class="input-group margin">
<span id="close" style="cursor: pointer;display: none;"  onClick="document.getElementById('mySelect').value='';document.getElementById('q').style.display='block';document.getElementById('q').value='';document.getElementById('qq').style.display='none';document.getElementById('qq').value='';document.getElementById('close').style.display='none';load(1);">&nbsp;&nbsp;quitar filtro&nbsp;<i class="fa fa-close" style="cursor: pointer;"></i></span>
						</div>
<div class="input-group margin">
		<select size="25" id="mySelect" class="form-control" style="width: 100%;" onClick="document.getElementById('qq').style.display='block';document.getElementById('qq').value='';document.getElementById('q').style.display='none';document.getElementById('close').style.display='block';load(1);">

                  <option style="cursor: pointer;" value="Administración">Administración</option>

                  <option style="cursor: pointer;" value="Call center">Call center</option>

                  <option style="cursor: pointer;" value="Comercio exterior">Comercio exterior</option>

                  <option style="cursor: pointer;" value="Comunicación">Comunicación</option>

                  <option style="cursor: pointer;" value="Construcción">Construcción</option>

                  <option style="cursor: pointer;" value="Diseño">Diseño</option>

                  <option style="cursor: pointer;" value="Educación">Educación</option>

                  <option style="cursor: pointer;" value="Finanzas">Finanzas</option>

                  <option style="cursor: pointer;" value="Gastronomia">Gastronomia</option>

                  <option style="cursor: pointer;" value="Gerencia">Gerencia</option>

                  <option style="cursor: pointer;" value="Ingeniería">Ingeniería</option>

                  <option style="cursor: pointer;" value="Legales">Legales</option>

                  <option style="cursor: pointer;" value="Logística">Logística</option>

                  <option style="cursor: pointer;" value="Marketing">Marketing</option>

                  <option style="cursor: pointer;" value="Medicina">Medicina</option>

                  <option style="cursor: pointer;" value="Minería">Minería</option>

                  <option style="cursor: pointer;" value="Oficios">Oficios</option>

                  <option style="cursor: pointer;" value="Producción">Producción</option>

                  <option style="cursor: pointer;" value="Recursos humanos">Recursos humanos</option>

                  <option style="cursor: pointer;" value="Secretaria">Secretaria</option>

                  <option style="cursor: pointer;" value="Seguros">Seguros</option>

                  <option style="cursor: pointer;" value="Tecnología">Tecnología</option>

                  <option style="cursor: pointer;" value="Ventas">Ventas</option>

                </select>
               
						</div>
</div>
<div class="col-md-8">              

<div class="box no-border" style="background-color: #ecf0f5;">
            

				  <div>

					<form class="form-horizontal">

					  <div class="form-group" style="background-color: #d2d6de; padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">
				<div class="col-md-2">
					<div class="input-group margin">
					<p  id="loader" style="display:none;"></p><!-- Carga gif animado --></div></div>
						<div class="col-md-5">

<div class="input-group margin">
<span class="input-group-addon"><i class="fa fa-search"></i></span>
<input type="text" class="form-control" id="q" placeholder="Buscar suscritos" onkeyup="load(1)">
<input style="display: none" type="text" class="form-control" id="qq" placeholder="Buscar suscritos" onkeyup="load(1)">
</div>

						</div>
						
						

					  </div>

                    
					</form>

					<div class="outer_div" ></div><!-- Datos ajax Final -->

				  </div>
           
           
           
            
          </div>
                 
</div>
<div class="col-md-7 " style="position: fixed; overflow-y: scroll; margin-top: 0px; margin-right: 0px; right: 0px; display: block; visibility: visible; max-height: 600px; z-index: 5000;">              

<div class="box no-border">
            
<div>

<div id="candidatosCV"></div><!-- Datos ajax Final -->

</div>
            
</div>
                 
</div>



</div>

<?php
		

exit();
}

if ($_GET['postulados'])//codigo elimina un elemento del array
{

?>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<?php	
	
$postulados=$_GET['postulados'];
	
$totalpost=  mysqli_query($con, "
SELECT * FROM 
Postulados
WHERE 
OfertaPublicada='$postulados' ");
echo '
<div class="row">

<div id="Tabla" class="col-md-12">
<div class="table-responsive no-border" style="background-color: #ecf0f5;">

			  <table class="table" style="background-color: #ecf0f5;">
			  
			  <tr>

					<th>Postulado</th>
					<th>Formación</th>
					<th>Gestión</th>
					<th>&nbsp;</th>

</tr>';
	
while ($totalPostulados=mysqli_fetch_array($totalpost)){ 
	
$busqueda4=  mysqli_query($con, "
SELECT 
Foto,
ID,
PuestoPT,
DescPP,
AreaPT,
EstadoPT,
Genero,
Email,
FechaNacio 
FROM 
candidatos 
WHERE 
ID='".$totalPostulados['IDcandidato']."' ");
$BuscarCV2=mysqli_fetch_array($busqueda4);	
	
echo '
	<tr role="row" class="odd">
                  <td>
				';?>
				  <button class="info-box-icon btn-bitbucket" onclick="operacion_candidatos(<?php echo $totalPostulados['IDcandidato']?>);">
				  
				  <div class="product-img"><img src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/<?php echo $BuscarCV2['Foto']?>" alt="" title="Da click para ver mas detalles"  style="max-height: 60px"></div>
				  
				  </button>
			<?php echo'	
				  </td>

                  <td>
				  
				  <a class="info-box-text description-header text-light-blue">Puesto:&nbsp;&nbsp;'.$BuscarCV2['PuestoPT'].'</a>
				  <span class="description-header">Area:&nbsp;&nbsp;'.$BuscarCV2['AreaPT'].'</span><br>
				  <span class="description-header">
';
				  
				 
				  $formacion = mysqli_query($con, "SELECT * FROM formacion WHERE IDCandidato='".$BuscarCV2['ID']."' ");
					while($FormacioNP=mysqli_fetch_array($formacion)){
					$nivelP=$FormacioNP['NivelE'];
					$nivelC=$FormacioNP['IDCandidato'];
					$nivelEP=$FormacioNP['CentroE'];
					echo ' <i class="fa fa-university" title="'.$nivelEP.'&nbsp;&nbsp;'.$nivelP.'" style="cursor: pointer;"></i> ';
                    } 
					
	
	
	
	
	
	
	  echo '</span>
							</td>

			<td>
			<div class="row">
<div class="col-md-12">

<form name="Postulados" method="post" action="https://empleosccb.com.mx/process/Gestion_postulados.php">
<div class="form-group">
<div class="col-md-12">
';
	
$Updategestion=  mysqli_query($con, "select * from Postulados where IDcandidato='".$totalPostulados['IDcandidato']."' ");
$gestion9=mysqli_fetch_array($Updategestion);   
$fin=$gestion9['Num'];
echo ' 
<select name="contactar" class="form-control text-light-blue"  data-placeholder="se a contactado?">  
<option value="'.$gestion9['contactar'].'" class="text-muted">'.$gestion9['contactar'].'</option>
<option value="Ya se contacto" class="text-muted">Ya se contacto</option>
<option value="No se a contactado" class="text-muted">No se a contactado</option>
<option value="No cumple con el perfil" class="text-muted">No cumple con el perfil</option>
</select>
		 		 			
</div>
</div>

<div class="form-group">
<div class="col-md-12">
<input value="'.$gestion9['fecha'].'" style="border: none" name="Fecha" type="text" class="form-control" id="Entrevista" placeholder="Fecha">
</div>
</div>

<div class="form-group">
<div class="col-md-12">
<input value="'.$gestion9['hora'].'" style="border: none" name="hora" type="text" class="form-control" id="fechahora" placeholder="Hora">
</div>
</div>


<input name="Num" value="'.$fin.'" class="hidden">
<button class="badge btn-bitbucket">Actualizar</button>
</form>

</div>
</div>
</td>
			<td>&nbsp;</td>	
</tr>
	';
		
}
	

	
echo '						
	
	
	<tr>

					<td colspan=5><span class="pull-right">
					 
				';  echo '
					 
					
					 </span></td>

				</tr>


</table>

</div>
</div>
</div>

';
?>

</div>

<div class="col-md-7 " style="position: fixed; overflow-y: scroll; margin-top: 0px; margin-right: 0px; right: 0px; display: block; visibility: visible; max-height: 600px;">              

<div class="box no-border">
            
<div>

<div id="candidatosCV"></div><!-- Datos ajax Final -->

</div>
            
</div>
                 
</div>
</div>	
	
	
<?php
	
exit();
}




?>















?>




			
