<?php
/*-------------------------
Autor: Obed Ramos
Web: www.ipdesign.com.mx
Correo-E: admin@ipdesign.com.mx
---------------------------*/
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

ofertas 

where 

ID='".$IDCand."'

");

$PerfilCV=mysqli_fetch_array($CandPerf);



?>



<div class="col-md-3" style="z-index: 2000000">

<button style="margin-left: -25px; float: left; position: fixed;" onClick="document.getElementById('candidatosCV').style.display='none';" type="button" class="close pull-left" aria-label="Close">

<span aria-hidden="true">X</span></button>&nbsp;

<div class="box box-danger" style="margin-top: -20px;">

<div class="box-body box-profile">

<img class="profile-user-img img-responsive img-circle" src="https://empleosccb.com.mx/Empresas/Avisos/Foto/<?php echo $PerfilCV['Foto']; ?>" title="<?php echo $PerfilCV['Empresa']; ?>">

<h3 class="profile-username text-center"><?php echo ' '.$PerfilCV['puesto'].' '; ?></h3>

<p class="text-muted text-center">Mensual:&nbsp;&nbsp;$<?php echo ' '.$PerfilCV['salario'].' '; ?></p>

<ul class="list-group list-group-unbordered">

<li class="list-group-item">

<b>Área:&nbsp;&nbsp;<?php echo ' '.$PerfilCV['area'].' '; ?></b> <a class="pull-right"></a>

</li>

<li class="list-group-item">

<b>Categoria:&nbsp;&nbsp;<?php echo ' '.$PerfilCV['categoria'].' '; ?></b> <a class="pull-right"></a>

</li>

<li class="list-group-item">

<b>Contrato:&nbsp;&nbsp;<?php echo ' '.$PerfilCV['tipo_contrato'].' '; ?></b> <a class="pull-right"></a>

</li>

<li class="list-group-item">

<b>Discapacidad:&nbsp;&nbsp;<?php echo ' '.$PerfilCV['discapacidad'].' '; ?></b> <a class="pull-right"></a>

</li>

<li class="list-group-item">

<b><?php echo 'Estatus:&nbsp;&nbsp; '.$PerfilCV['estatus'].' '; ?></b> <a class="pull-right"></a>

</li>

<li class="list-group-item">

<b>Publicada:&nbsp;&nbsp;<?php echo ' '.$PerfilCV['fecha_publicacion'].' '; ?></b> <a class="pull-right"></a>

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



                              

<div class="col-md-9" style="z-index: 2000000">

<div class="box box-danger">

<!-- The toolbar will be rendered in this container. -->

    <div id="toolbar-container"></div>

<textarea></textarea>

    <!-- This container will become the editable. -->

    <div id="editor"> 

        <h1><u>Descripcion de la Oferta</u></h1>

                      <h4>Subtitulo</h4>

                      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>

                      <ul>

                        <li>Lista item uno</li>

                        <li>Lista item dos</li>

                        <li>Lista item tres</li>

                        <li>Lista item cuatro</li>

                      </ul>

                      <p>Gracias,</p>

                      <p>EmpleosCCB</p>

    </div>



    <script>

		editor.plugins.get( 'CollaborationClient' ). cloudDocumentVersion

        DecoupledEditor

            .create( document.querySelector( '#editor' ),{

			removePlugins: [ 'ImageUpload', 'Link' ]

		} )

            .then( editor => {

                const toolbarContainer = document.querySelector( '#toolbar-container' );



                toolbarContainer.appendChild( editor.ui.view.toolbar.element );

            } )

            .catch( error => {

                console.error( error );

            } );

    </script>

</div>















</div>







            



	 





<?php

	

}