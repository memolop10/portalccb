<?php
/*-------------------------

Autor: Obed Ramos

Web: www.ipdesign.com.mx

Correo-E: admin@ipdesign.com.mx
	
---------------------------*/
session_start();

    include 'https://empleosccb.com.mx/library/configServer.php';

    include 'https://empleosccb.com.mx/library/consulSQL.php';

    include 'https://empleosccb.com.mx/process/securityPanelEmpresa.php';

?>
<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

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
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">  
  <div class="content-wrapper">  



    <!-- Main content -->



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
					<button onClick="operacion_paquetes(0);document.getElementById('loader1').style.display='block';" class="btn btn-app">
<i class="fa fa-inbox"></i> Paquetes <p class="badge bg-green" id="loader1" style="display:none;"></p><!-- Carga gif animado -->
</button>
                    


                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2 border-right">

                  <div class="description-block">
					<button id="loader2" onClick="operacion_avisos(this.value);" class="btn btn-app">
<i class="fa fa-bullhorn"></i> Contrato revisado <input type="button" id="loader3" class="badge bg-green no-border" border="0"  style="display:none;">
</button>
                   

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <button id="loader_busqueda" onClick="operacion_suscritos(this.value);" class="btn btn-app">
<i class="fa fa-folder-open"></i> Buscar en oferta <input type="button" id="loader_busqueda2" class="badge bg-green no-border" border="0"  style="display:none;">
</button>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <button id="postulados" onClick="operacion_postulados(this.value);" class="btn btn-app">
<i class="fa fa-file-pdf-o"></i> CV´S en oferta <input type="button" id="loader_postulados2" class="badge bg-green no-border" border="0"  style="display:none;">
</button>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <button id="" onclick="operacion_candidatos(this.value)" class="btn btn-app">
<i class="fa fa-file-pdf-o"></i> CV´S en oferta <input type="button" id="loader_person" class="badge bg-green no-border" border="0"  style="display:none;">
</button>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-2">

                  <div class="description-block">

                    <h5 class="description-header">35</h5>

					  <div id="null"></div>

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

<div id="id_prod"></div>








  

  <!-- /.content-wrapper -->

      

  </div>
  </div>

  <!-- /.content-wrapper -->  

  

<?php include '../../inc/footer.php'?>

</div>

<!-- ./wrapper -->

<script>
function mandarId(elem){
    $emailcontrato=(elem.id);
	
    }
</script>

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

				url:'./ajax/cvs.php',

				data: parametros,

				 beforeSend: function(objeto){

				 $('#loader').html('Cargando...');

			  },

				success:function(data){

					$(".outer_div").html(data).fadeIn('slow');

					$('#loader').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');

				}

			})

		}

	
function operacion_(page){

			var postulados= $("#postulados").val();
			var CVgestion= $("#CVgestion").val();

			var parametros={
				"page":page,
				"postulados":postulados,
				"CVgestion":CVgestion};

			$("#loader").fadeIn('slow');

			$.ajax({

				url:'./ajax/llamar_page.php',

				data: parametros,

				 beforeSend: function(objeto){

				 $('#loaderCandidatos').html('Cargando...');

			  },

				success:function(data){

					$("CVgestion").html(data).fadeIn('slow');

					$('#loaderCandidatos').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');

				}

			})

		}
	
	

function operacion_paquetes(paquetes){
	$.ajax({
		type: 'GET',
		url: './ajax/llamar_page.php',
		data: 'paquetes=' + paquetes,
		beforeSend: function(objeto){

			$('#loader1').html('Cargando...');

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$("#id_prod").html(respuesta).fadeIn('slow');
			$('#loader1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
}
	
function operacion_avisos(avisos){
	
	$.ajax({
		type: 'GET',
		url: './ajax/llamar_page.php',
		data: 'avisos=' + avisos,
		beforeSend: function(objeto){

			$("#loader1").html("Cargando...");

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$("#id_prod").html(respuesta).fadeIn('slow');
			$('#loader1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
}
	
function operacion_suscritos(suscritos){
	$.ajax({
		type: 'GET',
		url: './ajax/llamar_page.php',
		data: 'suscritos=' + suscritos,
		beforeSend: function(objeto){

			$("#loader1").html("Cargando...");

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$("#id_prod").html(respuesta).fadeIn('slow');
			$('#loader1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
}
	
function operacion_postulados(postulados){
	
	
	$.ajax({
		type: 'GET',
		url: './ajax/llamar_page.php',
		data: 'postulados=' + postulados,
		
		
		beforeSend: function(objeto){

			$("#loader1").html("Cargando...");

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$("#id_prod").html(respuesta).fadeIn('slow');
			$('#loader1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
}
	
function operacion_candidatos(candidatos){
	$.ajax({
		type: 'GET',
		url: './ajax/candidatosCV.php',
		data: 'candidatos=' + candidatos,
		beforeSend: function(objeto){

			$("#loaderCandidatos").html("Cargando...");

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$("#candidatosCV").html(respuesta).fadeIn('slow');
			$('#loaderCandidatos').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
}
	
function fotoOfertas(fotoOfertas){
	$.ajax({
		type: 'GET',
		url: './ajax/llamar_page.php',
		data: 'fotoOfertas=' + fotoOfertas,
		beforeSend: function(objeto){

			$("#loadfotoOfertas").html("Cargando...");

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$('#fotoOfertas' + fotoOfertas,).html(respuesta).fadeIn('slow');
			$('#loadfotoOfertas').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
}
	
function operacion_fileToUpload(fileToUpload){
var load=document.getElementById('fileToUpload');
	var file = load.files[0];
	var data = new FormData();
	data.append('archivo',file);
$.ajax({
		type: 'POST',
		url: './ajax/llamar_page.php',
		processData:false,
		data: 'fileToUpload=' + file,
		beforeSend: function(objeto){

			$("#loader1").html("Cargando...");

		  },
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$("#null").html(respuesta).fadeIn('slow');
			$('#loader1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
	});
	
}
function fileToUp22(fileToUp){
			
	var fileToUpload=document.getElementById('fileToUpload');
	
	var file = fileToUpload.files[0];
            var data = new FormData();
            data.append('archivo',file);

            $.ajax
            ({  
                url:'./ajax/llamar_page.php',
                type:'GET',
                contentType:false,
                data:data, 
                processData:false,
                cache:false,
				
		success: function(respuesta) {
			//Copiamos el resultado en #mostrar
			$('#null').html(respuesta).fadeIn('slow');
			$('#loader1').html('<i class="fa fa-check"></i>&nbsp;&nbsp;listo...');
	   }
            });
		
	
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

