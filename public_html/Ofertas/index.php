<?php

session_start();

include '../library/configServer.php';

include '../library/consulSQL.php';


$areaOf= $_POST['area'];

$puestoOf= $_POST['puesto'];

$ciudadOf= $_POST['ciudad'];

$fechaOf= $_POST['fecha'];

$jornadaOf= $_POST['jornada'];

$salarioOf= $_POST['salario'];

$discapacidadOf= $_POST['discapacidad'];



?>

<!DOCTYPE html>

<html>

<head>
<?php include '../inc/link.php'?>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Ofertas |</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

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



<?php include '../inc/Main_A.php'?>

  

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">  

    <!-- Main content -->

    <section class="content">

      <div class="row">

       

       

		<div class="col-xs-3"></div>

		<div class="col-md-6">

		

		<div class="box box-widget widget-user-2">

           

              <ul class="products-list product-list-in-box">

               <!-- /.item -->

                <li class="item">

                  

                 

                    <div class="box-body">

              <form name="filtros" method="post" action="../Ofertas/">

                <div class="input-group">
                  
                  

                  <select name="puesto" data-placeholder="Puesto deseado ..." class="form-control select2">
                  <option></option>
		<?php 	
		$puestO=  ejecutarSQL::consultar("select * from ofertas");
        while($resPuestos=mysql_fetch_array($puestO)){	
        
        echo '<option>'.$resPuestos['puesto'].'</option> ';
        }
		?>
                     
                     	  	  
                      
                  </select>

                      <span class="input-group-btn">

                        <button type="submit" class="btn btn-primary btn-flat">Buscar</button>

                      </span>

                </div>

              

            </div>

           

                </li>

                <!-- /.item -->

              </ul>

      

            <!-- /.box-body -->

          	<div class="box-widget widget-user-2 text-center">

              <div class="box  collapsed-box box-widget">

            <div class="box-header">

              <h3 class="box-title">&nbsp;</h3>

<button type="button" class="btn btn-box-tool" data-widget="collapse">Filtros &nbsp;&nbsp;<i class="fa fa-plus"></i>

                </button>

              <div class="box-tools">

                

              </div>

              <!-- /.box-tools -->

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <div class="box box-widget">

        <!-- /.box-header -->

        <div class="box-body">

          <div class="row">

           

           

            <div class="col-md-6">

              <div class="input-group form-group">

                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>

                <select name="fecha" class="form-control select2" data-placeholder="Fecha de publicación" style="width: 100%;">

                  <option></option>

                  <option>Urgente</option>

                  <option>Hoy</option>

                  <option>Ayer</option>

                  <option>Menor a 1 semana</option>

                  <option>Menor a 15 días</option>

                  <option>Menor a 1 mes</option>

                  

                </select>

              </div>

              <!-- /.form-group -->

              <div class="input-group form-group">

                <span class="input-group-addon"><i class="fa fa-th-large"></i></span>

                <select name="area" class="form-control select2" data-placeholder="Cargo o Área profesional" style="width: 100%;">

                  <option></option>

                  <option>Administración</option>

                  <option>Call center</option>

                  <option>Comercio exterior</option>

                  <option>Comunicación</option>

                  <option>Construcción</option>

                  <option>Diseño</option>

                  <option>Educación</option>

                  <option>Finanzas</option>

                  <option>Gastronomia</option>

                  <option>Gerencia</option>

                  <option>Ingeniería</option>

                  <option>Legales</option>

                  <option>Logística</option>

                  <option>Marketing</option>

                  <option>Medicina</option>

                  <option>Minería</option>

                  <option>Oficios</option>

                  <option>Producción</option>

                  <option>Recursos humanos</option>

                  <option>Secretaria</option>

                  <option>Seguros</option>

                  <option>Tecnología</option>

                  <option>Ventas</option>

                </select>

              </div>

              <!-- /.form-group -->

              <div class="input-group form-group">

                <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>

                <select name="jornada" class="form-control select2" data-placeholder="Tipo de Jornada" style="width: 100%;">

                  <option></option>

                  <option>Tiempo Completo</option>

                  <option>Medio Tiempo</option>

                  <option>Por Temporada</option>

                </select>

              </div>

              <!-- /.form-group -->

              <div class="input-group form-group">

                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>

                <select name="salario" class="form-control select2" data-placeholder="Salario" style="width: 100%;">

                  <option></option>

                  <option>Menos de $ 5,000</option>

                  <option>Más de $ 5,000</option>

                  <option>Más de $ 10,000</option>

                  <option>Más de $ 15,000</option>

                  <option>Más de $ 20,000</option>

                  <option>Más de $ 30,000</option>

                  

                </select>

              </div>

              <!-- /.form-group -->

            </div>

            

            <div class="col-md-6">

              <div class="input-group form-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>

                <select name="ciudad" class="form-control select2" data-placeholder="Lugar" style="width: 100%;">

                  <option></option>

                   <option>CDMX</option>

	<option>Aguascalientes</option>

	<option>Baja California</option>

	<option>Baja California Sur</option>

	<option>Campeche</option>

	<option>Coahuila de Zaragoza</option>

	<option>Colima</option>

	<option>Chiapas</option>

	<option>Chihuahua</option>

	<option>Durango</option>

	<option>Guanajuato</option>

	<option>Guerrero</option>

	<option>Hidalgo</option>

	<option>Jalisco</option>

	<option>México</option>

	<option>Michoacan de Ocampo</option>

	<option>Morelos</option>

	<option>Nayarit</option>

	<option>Nuevo León</option>

	<option>Oaxaca</option>

	<option>Puebla</option>

	<option>Querétaro</option>

	<option>Quintana Roo</option>

	<option>San Luis Potosi</option>

	<option>Sinaloa</option>

	<option>Sonora</option>

	<option>Tabasco</option>

	<option>Tamaulipas</option>

	<option>Tlaxcala</option>

	<option>Veracruz</option>

	<option>Yucatán</option>

	<option>Zacateca</option>                  

                </select>

              </div>

              <!-- /.form-group -->

              <div class="input-group form-group">

                <span class="input-group-addon"><i class="fa fa-wheelchair"></i></span>

                <select name="discapacidad" class="form-control select2" data-placeholder="Oferta para personas con discapacidad" style="width: 100%;">

                  <option></option>

                  <option>Sí</option>

                  <option>No</option>                  

                </select>

              </div>         

            

            <div class="">

                  <button type="submit" class="btn btn-info pull-right">Aplicar</button>

              	  </div>

            </div>

            

            

		   </form>

            

          </div>

        </div>

        

      </div>

            </div>

            <!-- /.box-body -->

          </div>

            </div>

            <!-- /.box-body -->

          </div>

          

          		

			

			

		</div>

		<div class="col-xs-3"></div>

	</div>

		<div class="row">

		

		<div class="col-xs-1"></div>

		

		

		

       

       

        <div class="col-md-10"> 

     

     <!-- Content Header (Page header) -->

		 <div class="box box-widget widget-user-2">

          

            

           

            <div class="box-header with-border">

              <h3 class="box-title">Avisos de <?php echo ''.$resOfertas['puesto'].''?> en Ciudad de México DF</h3>



            

            </div>

            

            

<?php 



	

        $ofertas=  ejecutarSQL::consultar("select * from ofertas where area='".$areaOf."' OR puesto='".$puestoOf."' OR ciudad='".$ciudadOf."' OR fecha_publicacion='".$fechaOf."'OR tipo_contrato='".$jornadaOf."'OR salario='".$salarioOf."'OR discapacidad='".$discapacidadOf."' ORDER BY fecha_publicacion DESC");



        while($resOfertas=mysql_fetch_array($ofertas)){



        echo '

				

		<div class="box-body">

              <ul class="products-list product-list-in-box">

               <!-- /.item -->

                <li class="item">

                  <div class="product-img">

                    <img src="dist/img/default-50x50.gif" alt="Product Image">

                  </div>

                  <div class="product-info">

                    <a href="#" class="product-title"> '.$resOfertas['puesto'].'

                      <span class="label label-warning bg-blue pull-right">'.$resOfertas['fecha_publicacion'].'</span></a>

                        <span class="product-description">

                          '.$resOfertas['descripcionOf'].'

                        </span>

                  </div>

                </li>

              </ul>

            </div>

		

		';



        }



?>     

             



             

             

			 

             

             

             

             

             

             

             

             

            

            

                 

                                  

                                  

                                  

                                  

                                  

                                  

                                   

                                          

                                                 

                                                               

                                    

                                                

                                                                        

            

            <!-- /.box-body -->

          	<div class="box-footer text-center">

              <a href="javascript:void(0)" class="uppercase">&nbsp;</a>

            </div>

            <!-- /.box-body -->

          </div>

          <!-- /.box -->

		</div>

      

      

       <div class="col-xs-1"></div>

        <!-- /.col -->

      </div>

      <!-- /.row -->

    </section>

    

  </div>

  <!-- /.content-wrapper -->  

  

<?php include '../inc/footer.php'?>

</div>

<!-- ./wrapper -->



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

<!--<script>

  $(function () {

    $("#example1").DataTable();

    $('#example2').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": false,

      "ordering": false,

      "info": false,

      "autoWidth": false

    });

  });

</script>-->
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

