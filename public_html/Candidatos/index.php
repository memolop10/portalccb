<?php

include '../library/configServer.php';
include '../library/consulSQL.php';
include '../process/securityPanel.php';

$fotoEmail= $_SESSION['EmailCandidato'];

$proveedoresc3=  ejecutarSQL::consultar("select * from candidatos where Email='".$_SESSION['EmailCandidato']."'");
$provc3=mysql_fetch_array($proveedoresc3);

$nombreF=$provc3['Foto'];
$nombreU=$provc3['Nombre'];
$nombreR=$provc3['NombreReal'];
$apellido=$provc3['Apellidos'];
$nacio=$provc3['FechaNacio'];
$genero=$provc3['Genero'];
$edocivil=$provc3['EstadoCivil'];
$tel1=$provc3['Tel1'];
$tel2=$provc3['Tel2'];
$pais=$provc3['Pais'];
$edo=$provc3['Estado'];
$cddelg=$provc3['CdDeleg'];
$cp=$provc3['CP'];
$direccion=$provc3['Direccion'];
$nacionalidad=$provc3['Nacionalidad'];
$licencia=$provc3['Licencia'];
$vehiculo=$provc3['Vehiculo'];
$discapa=$provc3['Discapacidades'];
$cargo=$provc3['CargoPP'];
$descpt=$provc3['DescPP'];
$situacion=$provc3['SituacionLPT'];
$area=$provc3['AreaPT'];
$salario=$provc3['SalarioMPT'];
$estadopt=$provc3['EstadoPT'];
$viajar=$provc3['ViajarPT'];
$cambio=$provc3['CambioDPT'];
$puestOPT=$provc3['PuestoPT'];

?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Candidato | empleosccb</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  
<?php include '../inc/link.php'?>


</head>

<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">



<?php include '../inc/Main_A.php'?>

  <div class="content-wrapper">  

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
                <img class="img-circle" src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/<?php echo $nombreF; ?>" alt="Foto CV">
				  </div>
              
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                
                  
                  
                  
                  
               
                <!-- Menu Body -->
               <li>
               	<!-- /.login-logo -->
  <div class="login-box-body">
    
    <form action="https://empleosccb.com.mx/process/fotocandidato.php" method="post" enctype="multipart/form-data" data-form="FotoCV">
      <div class="form-group has-feedback">
    <input name="Correo" value="<?php echo ''.$_SESSION['EmailCandidato'].''; ?>" class="hidden">
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

	echo ' '.$nombreU.' '; 

	?></h3>

              <h5 class="widget-user-desc"><?php 

	echo ' '.$_SESSION['EmailCandidato'].' '; 

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


            
       <?php include './llena.php'?>


        <div class="row">

		<div class="col-xs-1"></div>

        <div class="col-md-10"> 
   
	 <div class="box box-widget widget-user-2">

            <div class="box-header with-border">

              <h3 class="box-title">En 1 oferta(s) de trabajo estas suscrito</h3>

            </div>
 
            <div class="box-body">

              <ul class="products-list product-list-in-box">

 
                <li class="item">

                  <div class="product-img">

                    <img src="../dist/img/default-50x50.gif" alt="Product Image">

                  </div>

                  <div class="product-info">

                    <a href="javascript:void(0)" class="product-title">Samsung TV

                      <span class="label label-warning bg-blue pull-right">$1800</span></a>

                        <span class="product-description">

                          Samsung 32" 1080p 60Hz LED Smart HDTV.

                        </span>

                  </div>

                </li>

   
              </ul>

            </div>

   
          	<div class="box-footer text-center">

              <a href="javascript:void(0)" class="uppercase">&nbsp;</a>

            </div>

          </div>

 
		</div>

       <div class="col-xs-1"></div>
 
      </div>

    </section>

  </div>
 
  </div>
 
<?php include '../inc/footer.php'?>

</div>


<!-- jQuery 2.2.0 -->

<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Bootstrap 3.3.6 -->

<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>



<!-- Select2 -->

<script src="../plugins/select2/select2.full.min.js"></script>

<!-- InputMask -->

<script src="../plugins/input-mask/jquery.inputmask.js"></script>

<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>

<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- date-range-picker -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="../plugins/daterangepicker/daterangepicker.js"></script>

<!-- bootstrap datepicker -->

<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- bootstrap color picker -->

<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- bootstrap time picker -->

<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- SlimScroll 1.3.0 -->

<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- iCheck 1.0.1 -->

<script src="../plugins/iCheck/icheck.min.js"></script>

<!-- FastClick -->

<script src="../plugins/fastclick/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="../dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="../dist/js/demo.js"></script>











<!-- page script -->

<script>

  $(function () {

    $("#example1").DataTable();

    $('#example2').DataTable({

      "paging": true,

      "lengthChange": false,

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

</body>

</html>

