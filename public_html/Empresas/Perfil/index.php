<?php
/*-------------------------

Autor: Obed Ramos

Web: www.ipdesign.com.mx

Correo-E: admin@ipdesign.com.mx
	
---------------------------*/
session_start();
    include '../library/configServer.php';
    include '../library/consulSQL.php';
/*-----------DATOS----------*/
$NumOf=$_POST['NumOferta'];
$NumCon=$_POST['NumContrato'];
$EMailEmp=$_POST['Mail_Empresa'];
$BusPerm=$_POST['BusquedasPermitidas'];
$IDCand=$_POST['ID_Candidato'];



?>


<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Vista General | </title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  
<?php include '../../inc/link.php'?>

    <style>	

    .example-modal .modal {

	position: relative;

	bottom: auto;

	right: auto;

	left: auto;

	display: inline;

	z-index: 1;

	top: auto;

    }



    .example-modal .modal {

	background: transparent !important;

	overflow-x: hidden;

	overflow-y: hidden;

    }

    </style>



</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

<?php include '../../inc/Main_empresa.php'?>

<?php
$fotoEmail= $_SESSION['EmailEmpresa'];

$empresaS=  ejecutarSQL::consultar("select * from empresas where Email='".$_SESSION['EmailEmpresa']."'");
$Empresa=mysql_fetch_array($empresaS);

$NombreC=$Empresa['Nombre'];
$Foto=$Empresa['Foto'];
$rfC=$Empresa['RFC'];
$Tel=$Empresa['Telefono'];
$direccioN=$Empresa['Direccion'];
$RazonSc=$Empresa['RazonS'];
	

?>
  <div class="content-wrapper">  


    <section class="content">
     
     <div class="row">

		  <div class="col-md-1"></div>

        <div class="col-md-10">


          <div class="box box-widget widget-user-2">

            <div class="widget-user-header btn-bitbucket" style="margin-left: -20px; margin-right: -20px; -webkit-box-shadow: 0px 6px 10px rgba(18,145,216,1.00); box-shadow: 0px 6px 10px rgba(18,145,216,1.00); z-index: 2000;">

              <div class="widget-user-image">

                <li class="dropdown user user-menu" style="text-decoration: none; list-style-image: none; list-style-type: none;">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                
				<div class="widget-user-image">
                <img class="img-circle" src="https://empleosccb.com.mx/Empresas/Foto/<?php echo $Empresa['Foto']; ?>" alt="Foto CV">
				  </div>
              
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                
                  
                  
                  
                  
               
                <!-- Menu Body -->
               <li>
               	<!-- /.login-logo -->
  <div class="login-box-body">
    
    <form action="../../process/fotoempresa.php" method="post" enctype="multipart/form-data" data-form="FotoCV">
      <div class="form-group has-feedback">
    <input name="Correo" value="<?php echo ''.$_SESSION['EmailEmpresa'].''; ?>" class="hidden">
    <input type="file" name="fileToUpload" id="fileToUpload">

      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" value="Upload Image" name="FotoCV" class="btn btn-primary btn-block btn-flat">Cargar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
               </li>
                <!-- Menu Footer-->
                
              </ul>
            </li>

              </div>

              <span class="pull-right badge bg-green" title="CVs Visto">seleccionado 31</span>

              <h3 class="widget-user-username"><?php 

	echo ' '.$RazonSc.' '; 

	?></h3>

              <h5 class="widget-user-desc"><?php 

	echo ' '.$_SESSION['EmailEmpresa'].' '; 

	?></h5>
            </div>
          </div>
          


        </div>

        
        </div>       


                 
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
	<section class="content-header">
<h2>

</h2>
</section>
</div>
</div>
<?php

$CandPerf=  ejecutarSQL::consultar("
select * 
from 
candidatos 
where 
ID='".$IDCand."'
");
$PerfilCV=mysql_fetch_array($CandPerf);

		
		

$sql=ejecutarSQL::consultar("select VecesVisto from candidatos where ID='$IDCand' ");
$rw=mysql_fetch_array($sql);
$Numveces=$rw['VecesVisto']+1;

if(consultasSQL::UpdateSQL("candidatos", 
"VecesVisto='$Numveces'
", 
"ID='$IDCand'")){}	
?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-3">

<div class="box box-primary">
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
$sql33=ejecutarSQL::consultar("select ContactoDesb from Postulados where (IDcandidato=".$IDCand." and OfertaPublicada=".$NumOf.") ");
$rw33=mysql_fetch_array($sql33);
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
<div class="col-md-7">
<div class="box box-solid">


<div class="box-header with-border">
<i class="fa fa-bookmark-o"></i>
<h2 class="box-title"><?php echo ' '.$PerfilCV['AreaPT'].' '; ?></h2>
</div>
<div class="box-body">
<strong><i class="fa fa-book margin-r-5"></i> <?php echo ' '.$PerfilCV['PuestoPT'].' '; ?></strong>
<p class="text-muted">
<?php echo ' '.$PerfilCV['DescPP'].' '; ?>
</p>
<hr>
</div>


<div class="box-header with-border">
<i class="fa fa-bookmark-o"></i>
<h2 class="box-title">Experiencia profesional</h2>
</div>

<?php
$EXPp=  ejecutarSQL::consultar("
SELECT * 
FROM 
exp_profesional
WHERE 
IDCandidato='".$IDCand."'");
while($ExpProff=mysql_fetch_array($EXPp)){
echo '   
<div class="box-body">
<strong> '.$ExpProff['Cargo'].'</strong>
<p class="text-muted">
 '.$ExpProff['Empresa'].' /
 '.$ExpProff['Area'].' /
 '.$ExpProff['Giro'].' 
</p>
<p class="text-muted">
Desde:&nbsp;&nbsp; '.$ExpProff['Desde'].' /
Hasta:&nbsp;&nbsp; '.$ExpProff['Hasta'].'
</p>
<p class="text-muted">
 '.$ExpProff['Funciones'].'
</p>
<hr>
</div>	
';	
}
?>
<div class="box-header with-border">
<i class="fa fa-bookmark-o"></i>
<h2 class="box-title">Formación</h2>
</div>
<?php
$FORMp=  ejecutarSQL::consultar("
SELECT * 
FROM 
formacion
WHERE 
IDCandidato='".$IDCand."'");
while($FORMProff=mysql_fetch_array($FORMp)){
echo '   
<div class="box-body">
<strong> '.$FORMProff['CentroE'].'</strong>
<p class="text-muted">
 '.$FORMProff['NivelE'].' /
 '.$FORMProff['Estado'].' 
</p>
<p class="text-muted">
Desde:&nbsp;&nbsp; '.$FORMProff['Desde'].' /
Hasta:&nbsp;&nbsp; '.$FORMProff['Hasta'].'
</p>
<hr>
</div>	
';	
}
?>


</div>

</div>
</div>
                 
            
               
                              

       
              
                             
</section>
	 

</div>

<?php include '../../inc/footer.php'?>

</div>


<!-- jQuery 2.2.0 -->

<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Bootstrap 3.3.6 -->

<script src="../../bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->

<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>



<!-- Select2 -->

<script src="../../plugins/select2/select2.full.min.js"></script>

<!-- InputMask -->

<script src="../../plugins/input-mask/jquery.inputmask.js"></script>

<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>

<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- date-range-picker -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="../../plugins/daterangepicker/daterangepicker.js"></script>

<!-- bootstrap datepicker -->

<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- bootstrap color picker -->

<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- bootstrap time picker -->

<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- SlimScroll 1.3.0 -->

<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- iCheck 1.0.1 -->

<script src="../../plugins/iCheck/icheck.min.js"></script>

<!-- FastClick -->

<script src="../../plugins/fastclick/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="../../dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="../../dist/js/demo.js"></script>











<!-- page script -->

<script>

  $(function () {

    $("#example1").DataTable();

    $('#example2').DataTable({

      "paging": true,

      "lengthChange": true,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": true

    });

  });

</script>

<script>

  $(function () {

    //Initialize Select2 Elements

    $(".select2").select2();



    //Datemask dd/mm/yyyy

    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

    //Datemask2 mm/dd/yyyy

    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});

    //Money Euro

    $("[data-mask]").inputmask();



    //Date range picker

    $('#reservation').daterangepicker();

    //Date range picker with time picker

    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    //Date range as a button

    $('#daterange-btn').daterangepicker(

        {

          ranges: {

            'Today': [moment(), moment()],

            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],

            'Last 7 Days': [moment().subtract(6, 'days'), moment()],

            'Last 30 Days': [moment().subtract(29, 'days'), moment()],

            'This Month': [moment().startOf('month'), moment().endOf('month')],

            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]

          },

          startDate: moment().subtract(29, 'days'),

          endDate: moment()

        },

        function (start, end) {

          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

        }

    );



    //Date picker

    $('#datepicker').datepicker({

      autoclose: true

    });



    //iCheck for checkbox and radio inputs

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({

      checkboxClass: 'icheckbox_minimal-blue',

      radioClass: 'iradio_minimal-blue'

    });

    //Red color scheme for iCheck

    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({

      checkboxClass: 'icheckbox_minimal-red',

      radioClass: 'iradio_minimal-red'

    });

    //Flat red color scheme for iCheck

    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({

      checkboxClass: 'icheckbox_flat-green',

      radioClass: 'iradio_flat-green'

    });



    //Colorpicker

    $(".my-colorpicker1").colorpicker();

    //color picker with addon

    $(".my-colorpicker2").colorpicker();



    //Timepicker

    $(".timepicker").timepicker({

      showInputs: false

    });

  });

</script>

</body>

</html>

