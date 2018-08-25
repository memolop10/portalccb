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

            

          </div>
          


        </div>

        <div class="col-md-1"></div>

        </div>
     
<?php include './llena.php'?>     

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









<div class="row">
<div class="col-md-1"></div>
	
	<div class="col-md-10">


<?php 	
$paquetes=  ejecutarSQL::consultar("
SELECT 
Paquete,
NumFactura,
Estado
FROM 
Facturas
WHERE 
Email='".$_SESSION['EmailEmpresa']."'");
while($resPaquetes=mysql_fetch_array($paquetes)){
	

if ($resPaquetes['Estado'] == "Pagado"){
$descpaqte=  ejecutarSQL::consultar("
SELECT 
Duracion,
NumPublicaciones
FROM 
Paquetes
WHERE 
Paquete='".$resPaquetes['Paquete']."'");
$DescPaquete=mysql_fetch_array($descpaqte);

$result=mysql_query("SELECT count(*) as total from ofertas WHERE NumFactura='".$resPaquetes['NumFactura']."'");
$data=mysql_fetch_assoc($result);
	
$r1=$data['total'];	
$r2=$DescPaquete['NumPublicaciones'];
$PTES=($r2-$r1);	
	
	echo ' 
<form name="contratO" method="post" action="https://empleosccb.com.mx/Empresas/Avisos/">
<button type="submit" class="col-md-12 row" style="background-color: #FFFFFF; margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px; border-style: none;">
<div class="row" style="background-color: #FFFFFF; margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">

          <div class="col-sm-4 border-left bg-navy">
          <div class="small-box btn-bitbucket" style="padding-bottom: 0px; margin-bottom: 0px;">

            <div class="inner" align="left">
              <h4> '.$resPaquetes['Paquete'].' </h4>
              <p>Publicaciónes por '.$DescPaquete['Duracion'].' días</p>
			  <p>Contrato # '.$resPaquetes['NumFactura'].'</p>'.$resPaquetes['Estado'].'
			  <input class="hide" name="Contrato" value="'.$resPaquetes['NumFactura'].'">
            </div>

		  <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
				 
                </div>


                <div class="col-sm-6" align="center">

                  <div class="description-block">

                    <span class="info-box-text">&nbsp;</span>

                    <H3>Publicaciones disponibles '.$PTES.'</h3>

                  </div>

                </div>
                               
                <div class="col-sm-1">

                 <div class="small-box pull-right" style="padding-bottom: 0px; margin-bottom: 0px;">


            <div class="icon box" align="center">

              <i class="glyphicon glyphicon-folder-open text-blue"></i>

            </div>

          </div>

                </div>
</div>
		</button>
		
        </form>

	';	
}
	else{
		$descpaqte=  ejecutarSQL::consultar("
SELECT 
Duracion,
NumPublicaciones
FROM 
Paquetes
WHERE 
Paquete='".$resPaquetes['Paquete']."'");
$DescPaquete=mysql_fetch_array($descpaqte);

$result=mysql_query("SELECT count(*) as total from ofertas WHERE NumFactura='".$resPaquetes['NumFactura']."'");
$data=mysql_fetch_assoc($result);
	
$r1=$data['total'];	
$r2=$DescPaquete['NumPublicaciones'];
$PTES=($r2-$r1);	
	
	echo ' 

<div  class="col-md-12 row" style="background-color: #FFFFFF; margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px; border-style: none;">
<div class="row" style="background-color: #FFFFFF; margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">

          <div class="col-sm-4 border-left bg-navy">
          <div class="small-box btn-bitbucket" style="padding-bottom: 0px; margin-bottom: 0px;">

            <div class="inner" align="left">
              <h4> '.$resPaquetes['Paquete'].' </h4>
              <p>Publicaciónes por '.$DescPaquete['Duracion'].' días</p>
			  <p>Contrato # '.$resPaquetes['NumFactura'].'</p>
			  <input class="hide" name="Contrato" value="'.$resPaquetes['NumFactura'].'">
            </div>

		  <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
				 
                </div>


                <div class="col-sm-6" align="center">

                  <div class="description-block">

                    <span class="info-box-text">&nbsp;</span>

                    <H3>Publicaciones disponibles '.$PTES.'   
					
					';
		
if ($resPaquetes['Paquete'] == "Basico"){
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="CXQ63C6RTUV2W">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">Basico'.$resPaquetes['NumFactura'].'
</form>
';
}		
if ($resPaquetes['Paquete'] == "Ejecutivo"){
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TX9XLN8KWYE5Y">
<input onClick="https://empleosccb.com.mx/process/regproduct.php" type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">Ejecutivo'.$resPaquetes['NumFactura'].'
</form>
';
}		
if ($resPaquetes['Paquete'] == "Empresarial"){
	echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RWNQ56BNEWNK8">
<input id="boton" onclick="mandarId(this)" type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">Empresarial'.$resPaquetes['NumFactura'].'
</form>
';
}	
					
echo ' 					
					
					</h3>

                  </div>

                </div>
                               
                <div class="col-sm-1">

                 <div class="small-box pull-right" style="padding-bottom: 0px; margin-bottom: 0px;">


            <div class="icon box" align="center">

              <i class="glyphicon glyphicon-folder-open text-blue"></i>

            </div>

          </div>

                </div>
</div>
		</div>
		
        

	';
	}
	

}
?>
</div>
        
<div class="col-md-1"></div>
</div>
  

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

				url:'./ajax/paquetes_contratados.php',

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

</body>

</html>

