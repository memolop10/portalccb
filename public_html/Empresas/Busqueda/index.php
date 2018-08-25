<?php
/*-------------------------

Autor: Obed Ramos

Web: www.ipdesign.com.mx

Correo-E: admin@ipdesign.com.mx

---------------------------*/
session_start();

    include '../library/configServer.php';

    include '../library/consulSQL.php';

	include 'https://empleosccb.com.mx/process/securityPanelEmpresa.php';

$numContrato= $_POST['Contrato'];


$areaOf= $_POST['area'];

$puestoOf= $_POST['puesto'];

$ciudadOf= $_POST['ciudad'];

$discapacidadOf= $_POST['discapacidad'];

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
        <div class="col-md-10 ">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h3>Buscar Candidatos<sup style="font-size: 20px"></sup></h3>

              <p>Selecciona para qué oferta deseas hacer búsqueda de currículum</p>
            </div>
            <div class="icon">
              <i class="fa fa-spinner"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-2">
<div class="input-group margin">
<h4 class="text-black text-center" id="myModalLabel">Áreas</h4>
</div>
<div class="input-group margin">
<span id="close" onClick="document.getElementById('q').style.display='block';document.getElementById('q').value='';document.getElementById('qq').style.display='none';document.getElementById('qq').value='';document.getElementById('close').style.display='none';load(1);" style="display: none;"><a href="">&nbsp;&nbsp;quitar filtro&nbsp;<i class="fa fa-close"></i></a></span>
						</div>
<div class="input-group margin">
		<select size="25" id="mySelect" class="form-control" style="width: 100%;" onClick="document.getElementById('qq').style.display='block';document.getElementById('qq').value='';document.getElementById('q').style.display='none';document.getElementById('close').style.display='block';load(1);">

                  <option value="Administración">Administración</option>

                  <option value="Call center">Call center</option>

                  <option value="Comercio exterior">Comercio exterior</option>

                  <option value="Comunicación">Comunicación</option>

                  <option value="Construcción">Construcción</option>

                  <option value="Diseño">Diseño</option>

                  <option value="Educación">Educación</option>

                  <option value="Finanzas">Finanzas</option>

                  <option value="Gastronomia">Gastronomia</option>

                  <option value="Gerencia">Gerencia</option>

                  <option value="Ingeniería">Ingeniería</option>

                  <option value="Legales">Legales</option>

                  <option value="Logística">Logística</option>

                  <option value="Marketing">Marketing</option>

                  <option value="Medicina">Medicina</option>

                  <option value="Minería">Minería</option>

                  <option value="Oficios">Oficios</option>

                  <option value="Producción">Producción</option>

                  <option value="Recursos humanos">Recursos humanos</option>

                  <option value="Secretaria">Secretaria</option>

                  <option value="Seguros">Seguros</option>

                  <option value="Tecnología">Tecnología</option>

                  <option value="Ventas">Ventas</option>

                </select>
               
						</div>
</div>
<div class="col-md-8">              

<div class="box no-border" style="background-color: #ecf0f5;">
            

				  <div>

					<form class="form-horizontal">

					  <div class="form-group" style="background-color: #d2d6de; padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">
				<div class="col-md-1">
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
</div>
                 

</section>
	 

</div>

<?php include '../../inc/footer.php' 
	?>

</div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/VentanaCentrada.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	
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


<script>

		$(document).ready(function(){

			load(1);

		});


		function load(page){

			var q= $("#q").val();
			var qq= $("#qq").val();

			var parametros={
				"action":"ajax",
				"page":page,
				"q":q,
				"qq":qq};

			$("#loader").fadeIn('slow');

			$.ajax({

				url:'./ajax/productos_pedido.php',

				data: parametros,

				 beforeSend: function(objeto){

				 $('#loader').html('Cargando...');

			  },

				success:function(data){

					$(".outer_div").html(data).fadeIn('slow');

					$('#loader').html('listo...');

				}

			})

		}


</script>


<script>
	$(function(){
  	$(document).on('change','#mySelect',function(){ //detectamos el evento change
    	var value = $(this).val();//sacamos el valor del select
      $('#q').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
    });
  });
</script>
<!-- page script -->


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

