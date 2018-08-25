<?php
/*-------------------------

Autor: Obed Ramos

Web: www.ipdesign.com.mx

Correo-E: admin@ipdesign.com.mx
	
---------------------------*/
session_start();

    include '../library/configServer.php';

    include '../library/consulSQL.php';

$numContrato= $_POST['Contrato'];

?>
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Vista General | </title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
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

            <div class="box-footer ">

              <div class="row">

                <div class="col-sm-2 border-right">

                  <div class="description-block">

                    <h5 class="description-header">3,200</h5>

                    <span class="description-text">Perfil le&iacute;do</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2 border-right">

                  <div class="description-block">

                    <h5 class="description-header">13,000</h5>

                    <span class="description-text">Gestionando</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <h5 class="description-header">35</h5>

                    <span class="description-text">Concluidos</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <h5 class="description-header">35</h5>

                    <span class="description-text">Concluidos</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <h5 class="description-header">35</h5>

                    <span class="description-text">Concluidos</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <h5 class="description-header">35</h5>

                    <span class="description-text">Concluidos</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

              </div>

            </div>

          </div>
          
        </div>

        <div class="col-md-1"></div>

        </div>
      
<?php
	
$paquetes=  ejecutarSQL::consultar("
SELECT 
Paquete 
FROM 
Facturas
WHERE 
NumFactura='".$numContrato."'");
$paQ=mysql_fetch_array($paquetes);	
	
$PubPermitidas=  ejecutarSQL::consultar("
SELECT 
NumPublicaciones,
Duracion
FROM 
Paquetes
WHERE 
Paquete='".$paQ['Paquete']."'");
$DescPaquete=mysql_fetch_array($PubPermitidas);
	
$result=mysql_query("SELECT count(*) as total from ofertas WHERE NumFactura='".$numContrato."'");
$data=mysql_fetch_assoc($result);
	
$r1=$data['total'];	
$r2=$DescPaquete['NumPublicaciones'];	
$dr=$DescPaquete['Duracion'];	

if($r1<$r2){
	
include './llena.php';
	
}	
?>
     
<div class="col-md-1"></div>

<div class="col-md-10">
<?php 	
$ContratO=  ejecutarSQL::consultar("
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
while($OfxContrato=mysql_fetch_array($ContratO)){	
$result=mysql_query("SELECT count(*) as total from Postulados WHERE OfertaPublicada='".$numContrato."'");
$data=mysql_fetch_assoc($result);

	echo ' 
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

                  <div class="description-block">

                    <span class="info-box-text description-header" align="left">'.$OfxContrato['puesto'].'</span>
                    <span class="info-box-text description-header text-light-blue" align="left">'.$OfxContrato['Empresa'].'</span>
					<span class="info-box-text" align="left">'.$OfxContrato['ciudad'].'</span>
                    <span class="info-box-text text-light-blue" align="left"> Candidatos Suscritos &nbsp;&nbsp;'.$data['total'].'</span>
                    <span class="info-box-text" align="left">'.$OfxContrato['fecha_publicacion'].'</span>
					
                  </div>
                  </div>
				  
				  <div class="col-sm-1">
                  <div class="description-block">
				  <li class="dropdown user user-menu pull-right" style="text-decoration: none; list-style-image: none; list-style-type: none;">
              <!-- Menu Toggle Button -->
              <button href="#" class="dropdown-toggle btn btn-app pull-right" data-toggle="dropdown" style="max-height: 50px; padding-top: 7px;">
                
				<img class="img-circle" style="max-height: 40px; max-width: 60px; padding-top: 0px; margin-left: 0px; margin-top: -2px;" src="https://empleosccb.com.mx/Empresas/Avisos/Foto/'.$OfxContrato['Foto'].'" alt="&nbsp;&nbsp;&nbsp;Logo">
              
              </button>
              <ul class="dropdown-menu">
                
                <!-- Menu Body -->
               <li>
               	
  <div class="login-box-body ">
    
    <form action="../../process/fotoOfertas.php" method="post" enctype="multipart/form-data" data-form="FotoOF">
      <div class="form-group has-feedback">
    <input name="Id" value="'.$OfxContrato['ID'].'" class="hidden">
    <input type="file" name="fileToUpload" id="fileToUpload">

      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" value="Upload Image" name="FotoOF" class="btn btn-primary btn-block btn-flat">Cargar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  
               </li>
                
              </ul>
            </li> 
			  <button class="btn btn-app pull-right" style="max-height: 50px; padding-top: 7px;">
                <i class="fa fa-search"></i> Buscar
              </button>
				  
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

	';

}

?>

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

<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

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

      "autoWidth": false

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
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
</body>

</html>

