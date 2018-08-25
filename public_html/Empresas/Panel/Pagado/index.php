<?php
/*-------------------------

Autor: Obed Ramos

Web: www.ipdesign.com.mx

Correo-E: admin@ipdesign.com.mx
	
---------------------------*/
ob_start();

	session_start();

    include '../library/configServer.php';

    include '../library/consulSQL.php';
	
$ofertaSelecionada= $_POST['PAQUETE'];


?>

<!DOCTYPE html> 

<html>

<head>



  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Contratar |</title>

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

<div class="content-wrapper"> 



<?php include '../../inc/Main_empresa.php'?>

  

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">  
  <div class="content">  

<div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8 ">

          <!-- small box -->

          <div class="small-box bg-navy">

            <div class="inner">

              <h3>Contratacion de Ofertas<sup style="font-size: 20px"></sup></h3>



              <p>por paquete seleccionado</p>

            </div>

            <div class="icon">

              <i class="glyphicon glyphicon-tag"></i>

            </div>

            

          </div>

        </div>

        <!-- ./col -->

      </div>

    <!-- Main content -->
    
        <div class="row">

			<div class="col-md-3"></div>
        <div class="col-md-6 invoice">
     
      <!-- title row -->
			
<?php
/* Obtengo los datos del Proveedor */                                                    						
	$Perfil= ejecutarSQL::consultar("
SELECT
	Email,
	Telefono,
	RFC,
	RazonS,
	Direccion,
	NumctaCLABE,
	NumCTA
FROM
   empleoCCB
WHERE ID='1'
");
$Pempleosccb=mysql_fetch_array($Perfil);
	
$ClienteEmpresa= ejecutarSQL::consultar("
SELECT
	Email,
	Telefono,
	RFC,
	RazonS,
	Direccion
FROM
   empresas
WHERE Email='".$_SESSION['EmailEmpresa']."'
");
$PerfilE=mysql_fetch_array($ClienteEmpresa);	

$DatosOferta= ejecutarSQL::consultar("
SELECT * FROM
   Paquetes
WHERE Paquete='".$ofertaSelecionada."'
");
$Descripcion=mysql_fetch_array($DatosOferta);
	
$sql=ejecutarSQL::consultar("select LAST_INSERT_ID(NumFactura) as last from Facturas order by NumFactura desc limit 0,1 ");
$rw=mysql_fetch_array($sql);
$numero_pedido=$rw['last']+1;	 //Obtengo el ultimo numero de pedido y sumo 1	
	
?>
      
<form name="COfertas" method="post" action="../../process/regContratacionOfertas.php">
      <div class="row">
        <div class="col-md-12">
         <h2 class="page-header">
            <i class="fa fa-globe"></i> empleosccb.com
            <small class="pull-right"><?php echo date("d-m-Y");?> </small>
          </h2>
     <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          
          <address>
            <strong><?php echo $PerfilE['RazonS']; ?></strong><br>
            <?php echo $PerfilE['Direccion']; ?><br>
            RFC:&nbsp;<?php echo $PerfilE['RFC']; ?><br>
            Telefono:&nbsp;<?php echo $PerfilE['Telefono']; ?><br>
            Correo:&nbsp;<?php echo $PerfilE['Email']; ?>
          </address>
        </div>
        <!-- /.col -->
		 <div class="col-sm-1 invoice-col"></div>
        <div class="col-sm-5 invoice-col">
          
          <address>
            <strong><?php echo $Pempleosccb['RazonS']; ?></strong><br>
            <?php echo $Pempleosccb['Direccion']; ?><br>
            RFC:&nbsp;<?php echo $Pempleosccb['RFC']; ?><br>
            Telefono:&nbsp;<?php echo $Pempleosccb['Telefono']; ?><br>
            Correo:&nbsp;<?php echo $Pempleosccb['Email']; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-2 invoice-col">
          <b>Factura #   <?php echo $numero_pedido ?> </b><br>
          <br>
        </div>
        <!-- /.col -->
      </div><h2 class="page-header"></h2>
      </div>
      </div>

      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Paquete</th>
              <th>Publicaciones</th>
              <th>Duracion</th>
              <th>CV Suscritos</th>
              <th>Busqueda de CV</th>
              <th>Costo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><?php echo $Descripcion['Paquete']; ?></td>
              <td><?php echo $Descripcion['NumeroPublicaciones']; ?></td>
              <td><?php echo $Descripcion['Duracion']; ?></td>
              <td><?php echo $Descripcion['CVsuscritos']; ?></td>
              <td><?php echo $Descripcion['BuscarCV']; ?></td>
              <td><?php echo $Descripcion['Subtotal']; ?></td>
                            
            </tr>
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        
        <div class="col-md-6">
         <p class="lead">Metodos de Pago:</p>
         
         <div class="form-group">
                  <div class="radio callout">
                    <label><input type="radio" name="FormadePago" value="Paypal" checked>
						Tarjeta de Debito o Credito mediante 
         				<i class="fa fa-paypal"></i>aypal &nbsp;&nbsp;<br>
         				<img src="../../dist/img/credit/visa.png">
          				<img src="../../dist/img/credit/mastercard.png">
          				<img src="../../dist/img/credit/american-express.png">
					  </label>
                  </div>
                  <div class="radio callout">
                    <label><input type="radio" name="FormadePago" value="Deposito_Transferencia">
                    Deposito o Transferencia
                    <i class="fa fa-bank"></i>
					  </label>
                  </div>
                </div>


        </div>
        
        
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">No podra Publicar Hasta que se encuentre Validado el Pago</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td><?php echo "$ &nbsp;"; echo $Descripcion['Subtotal']?></td>
              </tr>
              <tr>
                <th>IVA (16%)</th>
                <td><?php echo "$ &nbsp;"; echo $Descripcion['IVA']?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td><?php echo "$ &nbsp;"; echo $Descripcion['Costo']?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     


     
<input class="hide" name="EmailCliente" value="<?php echo $_SESSION['EmailEmpresa'] ?>">
<input class="hide" name="Razonsocial" value="<?php echo $PerfilE['RazonS'] ?>">
<input class="hide" name="Direccion" value="<?php echo $PerfilE['Direccion'] ?>">
<input class="hide" name="RFC" value="<?php echo $PerfilE['RFC'] ?>">
<input class="hide" name="Telefono" value="<?php echo $PerfilE['Telefono'] ?>">
<input class="hide" name="Oferta" value="<?php echo $ofertaSelecionada ?>">
<input class="hide" name="NumPedido" value="<?php echo $numero_pedido ?>">
<input class="hide" name="Costo" value="<?php echo $Descripcion['Costo'] ?>">
<input class="hide" name="Fecha" value="<?php echo date("d-m-Y") ?>">
<input class="hide" name="Estatus" value="Pendiente">
            
            
            
                
     
     
     
      <div class="row no-print">
        <div class="col-xs-12">
          <button  type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Siguiente
          </button>
        </div>
      </div>
</form>        
        
        
			</div>
		</div>

    <!-- /.content -->


     

  </div>
  </div>

  <!-- /.content-wrapper -->  

  



</div>

<!-- ./wrapper -->


<?php include '../../inc/footer.php'?>
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

