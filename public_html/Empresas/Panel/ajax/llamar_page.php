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

if (isset($_GET['paquetes']))//codigo elimina un elemento del array
{

		include 'pagination.php'; //include pagination file

		//pagination variables

		$page = (isset($_REQUEST['paquetes']) && !empty($_REQUEST['paquetes']))?$_REQUEST['paquetes']:1;

		$per_page = 4; //how much records you want to show

		$adjacents  = 4; //gap between pages after number of adjacents

		$offset = ($page - 1) * $per_page;

		//Count the total number of row in your table*/

		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM Facturas WHERE Email='".$_SESSION['EmailEmpresa']."' ");

		$row= mysqli_fetch_array($count_query);

		$numrows = $row['numrows'];

		$total_pages = ceil($numrows/$per_page);

		$reload = './index.php';

		//main query to fetch the data
	
	
	
	
$paquetes= mysqli_query($con, "
SELECT 
Paquete,
NumFactura,
Estado
FROM 
Facturas
WHERE 
Email='".$_SESSION['EmailEmpresa']."' LIMIT $offset,$per_page");

echo '
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-1"></div>
<div class="col-md-8">
<div class="table-responsive no-border" style="background-color: #ecf0f5;">

			  <table class="table" style="background-color: #ecf0f5;">
			  
			  <tr>

					<th>Contrato</th>
					<th>Producto</th>
					<th>Ofertas</th>
					<th>Validéz</th>
					<th>Estado</th>

</tr>';
	
while($resPaquetes=mysqli_fetch_array($paquetes)){
	

if ($resPaquetes['Estado'] == "Pagado"){
$descpaqte= mysqli_query($con, "
SELECT 
Duracion,
NumPublicaciones
FROM 
Paquetes
WHERE 
Paquete='".$resPaquetes['Paquete']."'");
$DescPaquete=mysqli_fetch_array($descpaqte);

$result= mysqli_query($con, "SELECT count(*) as total from ofertas WHERE NumFactura='".$resPaquetes['NumFactura']."'");
$data=mysqli_fetch_assoc($result);
	
$r1=$data['total'];	
$r2=$DescPaquete['NumPublicaciones'];
$PTES=($r2-$r1);	
	
	?> 

<tr>

						<td><span class="info-box-icon btn-bitbucket">#<i class=""><?php echo $resPaquetes['NumFactura']?></i></span><input class="hide" name="Contrato" value="'.$resPaquetes['NumFactura']?>"></td>
						<td><?php echo $resPaquetes['Paquete']?></td>
						<td style="cursor: pointer;" onClick="document.getElementById('loader3').style.display='block';document.getElementById('loader2').value='<?php echo $resPaquetes['NumFactura'] ?>';document.getElementById('loader3').value='<?php echo $resPaquetes['NumFactura'] ?>';operacion_avisos('<?php echo $resPaquetes['NumFactura']?>');"><?php echo $PTES?>&nbsp;&nbsp;<i class="fa fa-search"></i></td>
						<td ><?php echo $DescPaquete['Duracion']?> días</td>
						<td ><?php echo $resPaquetes['Estado']?></td>

</tr>

	<?php	
}
	else{
		$descpaqte= mysqli_query($con, "
SELECT 
Duracion,
NumPublicaciones
FROM 
Paquetes
WHERE 
Paquete='".$resPaquetes['Paquete']."'");
$DescPaquete=mysqli_fetch_array($descpaqte);

$result= mysqli_query($con, "SELECT count(*) as total from ofertas WHERE NumFactura='".$resPaquetes['NumFactura']."'");
$data=mysqli_fetch_assoc($result);
	
$r1=$data['total'];	
$r2=$DescPaquete['NumPublicaciones'];
$PTES=($r2-$r1);	
	
?>

<tr>

						<td><span class="info-box-icon btn-bitbucket">#<i class=""><?php echo $resPaquetes['NumFactura']?></i></span><input class="hide" name="Contrato" value="<?php echo $resPaquetes['NumFactura']?>"></td>
						<td><?php echo $resPaquetes['Paquete']?></td>
				<td><?php echo $PTES ?>&nbsp;&nbsp;<i onClick="" class="fa fa-search"></i>          

                 
				
						</td>
						<td ><?php echo $DescPaquete['Duracion']?> días</td>
						<td ><?php echo $resPaquetes['Estado']?>
						
<?php
						
if ($resPaquetes['Paquete'] == "Basico"){
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="CXQ63C6RTUV2W">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
';
}		
if ($resPaquetes['Paquete'] == "Ejecutivo"){
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TX9XLN8KWYE5Y">
<input onClick="https://empleosccb.com.mx/process/regproduct.php" type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
';
}		
if ($resPaquetes['Paquete'] == "Empresarial"){
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RWNQ56BNEWNK8">
<input id="boton" onclick="mandarId(this)" type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
';
}						

		
}
}
	

	
echo '						
						
						</td>

</tr>

<tr>

					<td colspan=5><span class="pull-right">
					 ';
					 echo paginate($reload, $page, $total_pages, $adjacents);	
					 
					 echo '
					 </span></td>

				</tr>

</table>
			</div>
			</div>
</div>';	
	
exit();

}

if (isset($_GET['avisos']))//codigo elimina un elemento del array
{
$numContrato=intval($_GET['avisos']);
	

$paquetes=  mysqli_query($con, "
SELECT 
Paquete 
FROM 
Facturas
WHERE 
NumFactura='".$numContrato."'");
$paQ=mysqli_fetch_array($paquetes);	
	
$PubPermitidas=  mysqli_query($con, "
SELECT 
NumPublicaciones,
Duracion
FROM 
Paquetes
WHERE 
Paquete='".$paQ['Paquete']."'");
$DescPaquete=mysqli_fetch_array($PubPermitidas);
	
$result=mysqli_query($con, "SELECT count(*) as total from ofertas WHERE NumFactura='".$numContrato."'");
$data=mysqli_fetch_assoc($result);
	
$r1=$data['total'];	
$r2=$DescPaquete['NumPublicaciones'];	
$dr=$DescPaquete['Duracion'];	

if($r1<$r2){
	
include './llena.php';
	
}
	
$ContratO=  mysqli_query($con, "
SELECT 
puesto,
ID,
Foto,
Empresa,
ciudad,
fecha_publicacion,
Fecha_Terminacion,
Estatus
FROM 
ofertas
WHERE 
NumFactura='".$numContrato."'");
while($OfxContrato=mysqli_fetch_array($ContratO)){	
	
	
$result=mysqli_query($con, "SELECT count(*) as total from Postulados WHERE OfertaPublicada='".$OfxContrato['ID']."'");
$data=mysqli_fetch_assoc($result);

	echo ' 
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-1"></div>
<div class="col-md-8">
<div class="row" style="background-color: #FFFFFF; margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">

                <div class="col-sm-4 border-left bg-navy">
                                  
                  <div class="small-box btn-bitbucket" style="padding-bottom: 0px; margin-bottom: 0px;">

            <div class="inner" align="left">

              <h3> '.$OfxContrato['Estatus'].' </h3>
              <p>Vigente hasta:&nbsp;&nbsp; '.$OfxContrato['Fecha_Terminacion'].'</p>
              <h6>Oferta #&nbsp;&nbsp; '.$OfxContrato['ID'].'</h6>

            </div>
      
          </div>
				 
                </div>

                <div class="col-sm-5">
'; ?>
                  <div style="cursor: pointer" onClick="document.getElementById('loader_postulados2').style.display='block';document.getElementById('postulados').value='<?php echo $OfxContrato['ID']; ?>';document.getElementById('loader_postulados2').value='<?php echo $OfxContrato['ID']; ?>';operacion_postulados(<?php echo $OfxContrato['ID']; ?>);" class="description-block">

                    <span class="info-box-text description-header" align="left"><?php echo $OfxContrato['puesto']?></span>
                    <span class="info-box-text description-header text-light-blue" align="left"><?php echo $OfxContrato['Empresa']?></span>
					<span class="info-box-text" align="left"><?php echo $OfxContrato['ciudad']?></span>
					
					
                    <span class="info-box-text text-light-blue" align="left"> Candidatos Suscritos &nbsp;&nbsp;<?php echo $data['total']; ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></span>
					
				<?php	echo '
                    <span class="info-box-text" align="left">'.$OfxContrato['fecha_publicacion'].'</span>
					
                  </div>
                  </div>
				  
				  <div class="col-sm-1">
                  <div class="description-block">
				  <li class="dropdown user user-menu pull-right" style="text-decoration: none; list-style-image: none; list-style-type: none;">
              <!-- Menu Toggle Button -->
              <button href="#" onClick="fotoOfertas('.$OfxContrato['ID'].');" class="dropdown-toggle btn btn-app pull-right" data-toggle="dropdown" style="max-height: 50px; padding-top: 7px;">
                
				<img class="img-circle" style="max-height: 40px; max-width: 60px; padding-top: 0px; margin-left: 0px; margin-top: -2px;" src="https://empleosccb.com.mx/Empresas/Avisos/Foto/'.$OfxContrato['Foto'].'" alt="&nbsp;&nbsp;&nbsp;Logo">
              
              </button>
              <ul class="dropdown-menu">
                
                <!-- Menu Body -->
               <li>
               	
  <div class="login-box-body ">
    
    
	<div id="fotoOfertas'.$OfxContrato['ID'].'"></div>
	
	

  </div>
  
               </li>
                
              </ul>
            </li> 
		'; ?>	
			
			  <button onClick="document.getElementById('loader_busqueda2').style.display='block';document.getElementById('loader_busqueda').value='<?php echo $OfxContrato['ID'] ?>';document.getElementById('loader_busqueda2').value='<?php echo $OfxContrato['ID'] ?>';operacion_suscritos(<?php echo $OfxContrato['ID']?>);" class="btn btn-app pull-right" style="max-height: 50px; padding-top: 7px;">
                <i class="fa fa-search"></i> Buscar
              </button>
	<?php echo '			  
                 
                  </div>
                  </div>
				  
                <div class="col-sm-1">

                 <div class="small-box pull-right" style="padding-bottom: 0px; margin-bottom: 0px;">

            <div class="icon box" align="center">

              <i class="fa fa-bullhorn text-blue"></i>

            </div>

          </div>

                </div>

        </div>
		<br>
	
</div>
</div>
	';

}
	

exit();
}

if ($_GET['fotoOfertas'])
{
$_SESSION['POSTId']=$_GET['fotoOfertas'];
echo '<input type="file" name="fileToUpload" id="fileToUpload">
	  <button type="submit" onClick="operacion_fileToUpload();" class="btn btn-block btn-default btn-sm">Cargar</button></form>
';
	
exit();
    
}

if ($_POST['fileToUpload'])
{
$correo=$_SESSION['POSTId'];
$namef=$_FILES["archivo"]["name"];
$namefoto="$correo$namef";
echo $correo;
echo $namefoto;
$target_dir = "../../Avisos/Foto/$correo";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image




if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo "File is not an image.";

        $uploadOk = 0;

    }

}

// Check file size

if ($_FILES["fileToUpload"]["size"] > 500000) {

    echo "Lo siento, tu foto es demasiado grande.&nbsp;&nbsp;&nbsp;";
	sleep(3);
	exit();

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {

    echo "Lo sentimos, solo se permiten fotos JPG, JPEG y PNG.&nbsp;&nbsp;&nbsp;";
	sleep(3);
    $uploadOk = 0;
	exit();
}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

    echo "Lo sentimos, tu foto no fue cargada.&nbsp;&nbsp;&nbsp;";
	sleep(3);
	exit();

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
if(consultasSQL::UpdateSQL("ofertas", "Foto='$namefoto'", "ID='$correo'")){
    	
}
echo "Se a cargado su foto.&nbsp;&nbsp;&nbsp;";
      exit();
		

    } else {

        echo "Lo sentimos, hubo un error al cargar su foto.&nbsp;&nbsp;&nbsp;";
		sleep(3);
		exit();

    }

}

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




if ($_GET['CVgestion'])
{

 
}

?>




			