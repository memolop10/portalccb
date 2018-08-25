<?php
/*-------------------------
Autor: Obed Ramos
Web: www.ipdesign.com.mx
Correo-E: admin@ipdesign.com.mx
---------------------------*/
session_start();



?>

<!DOCTYPE html>



<html>



<head>



  <meta content="charset=UTF-8">



  <title>Empleos CCB | Candidato</title>



  <!-- Tell the browser to be responsive to screen width -->



  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/decoupled-document/ckeditor.js"></script>

  <?php include 'inc/link.php'?>



</head>



<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">



<div class="wrapper">







<?php include 'inc/Main_A.php'?>



<div class="content-wrapper" style="background: url(&quot;dist/img/photo1.png&quot;) center center; min-height: 647px;">



<section class="content-header">



<div class="row">

<div class="col-md-2"></div>



<div class="col-md-8">              



<div class="box no-border" style="background-color: #ecf0f5;">



<form class="form-horizontal">



<div class="form-group" style="background-color: #d2d6de; padding-top: 15px; padding-bottom: 15px; padding-right: 15px; padding-left: 15px;">



<div class="col-md-3">

<div class="input-group margin pull-right">

<span id="close" style="cursor: pointer; display: none;"  onClick="document.getElementById('mySelect').value='';document.getElementById('q').style.display='block';document.getElementById('q').value='';document.getElementById('qq').style.display='none';document.getElementById('qq').value='';document.getElementById('close').style.display='none';load(1);">&nbsp;&nbsp;quitar filtro&nbsp;<i class="fa fa-close"></i></span>

</div>

</div>

<div class="col-md-7">

<div class="input-group margin">

<span class="input-group-addon"><i class="fa fa-search"></i></span>

<input type="text" class="form-control" id="q" placeholder="Buscar suscritos" onkeyup="load(1)">

<input style="display: none" type="text" class="form-control" id="qq" placeholder="Buscar suscritos" onkeyup="load(1)">

</div>

</div>

<div class="col-md-2">

<div class="input-group margin">

<br>

<p  id="loader" style="display:none;"></p>

</div>

</div>

</div>



                    

</form>

           

           

           

            

</div>

                 

</div>

</div>













<div class="row">

<div class="col-md-1">

</div>

<div class="col-md-2">

<div class="input-group margin">

		<select size="23" id="mySelect" placeholder="Áreas" class="form-control" style="width: 160px; overflow-y: hidden; overflow-x: hidden;" onClick="document.getElementById('qq').style.display='block';document.getElementById('qq').value='';document.getElementById('q').style.display='none';document.getElementById('close').style.display='block';load(1);">

                  

                  

                  

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

<div class="outer_div" ></div><!-- Datos ajax Final -->



</div>

<div class="col-md-7 " style="position: fixed; overflow-y: scroll; margin-right: 0px; right: 0px; display: block; visibility: visible; max-height: 600px; z-index: 5000; margin-bottom: 0px; bottom: 0px;">              



<div id="candidatosCV"></div><!-- Datos ajax Final -->

              

</div>

</div>

















</section>



</div>

</div>



<?php include 'inc/footer.php'?>



</div>





<!-- Funciones -->







<!-- jQuery 2.2.0 -->



<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>



<!-- Bootstrap 3.3.6 -->



<script src="bootstrap/js/bootstrap.min.js"></script>



<!-- DataTables -->



<script src="plugins/datatables/jquery.dataTables.min.js"></script>



<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>







<!-- Select2 -->



<script src="plugins/select2/select2.full.min.js"></script>



<!-- InputMask -->



<script src="plugins/input-mask/jquery.inputmask.js"></script>



<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>



<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>



<!-- date-range-picker -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>



<script src="plugins/daterangepicker/daterangepicker.js"></script>



<!-- bootstrap datepicker -->



<script src="plugins/datepicker/bootstrap-datepicker.js"></script>



<!-- bootstrap color picker -->



<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>



<!-- bootstrap time picker -->



<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>



<!-- SlimScroll 1.3.0 -->



<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>



<!-- iCheck 1.0.1 -->



<script src="plugins/iCheck/icheck.min.js"></script>



<!-- FastClick -->



<script src="plugins/fastclick/fastclick.js"></script>



<!-- AdminLTE App -->



<script src="dist/js/app.min.js"></script>



<!-- AdminLTE for demo purposes -->



<script src="dist/js/demo.js"></script>





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



				url:'./ajx/ofertas.php',



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



function operacion_candidatos(candidatos){

	$.ajax({

		type: 'GET',

		url: './ajx/candidatosCV.php',

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

	

</script>

<script>

	$(function(){

  	$(document).on('change','#mySelect',function(){ 

    	var value = $(this).val();

      $('#q').val(value);

    });

  });

</script>





<!-- page script -->





</body>



</html>

