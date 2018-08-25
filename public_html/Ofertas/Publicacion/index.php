<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Ofertas | CCB</title>

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



<?php include '../../inc/Main_A.php'?>

  

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">  

    <!-- Main content -->

    <section class="content">

      <div class="row">

       

       

		<div class="col-xs-1"></div>

		

		

            <!-- /.box-Perfil Empresa -->

       

		<div class="col-md-7">

          <div class="box box-solid">

            <div class="box box-header with-border">

              <div class="row">

              <div class="col-md-2">

              <div class="box-header">

              	<span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

              </div>

              </div>

              <div class="col-md-10">

              <div class="box-header">

              	<h3 class="box-title">DCH KnowWho</h3><br>

              	<p> Empresa Mexicana que inicio operaciones a finales de los 80s, nos respaldan más de 25 años de experiencia en el mercado de Consultoría y Servicios en Recursos Humanos. Contamos con oficinas regionales en las principales ciudades de la República Mexicana y operaciones en sitio, lo que nos permite brindar servicios en todo el territorio na...</p>

              </div>

              </div>

              </div>

            </div>

            <!-- /.box-Sobre la Oferta -->

            <div class="box-body">

             <h3 class="box-title text-light-blue">Sobre la oferta</h3>

              <dl>

                <dt>Description lists</dt>

                <dd><li>A description list is perfect for defining terms.</li></dd>

                <dt>Euismod</dt>

                <dd><li>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</li></dd>

                

                <dt>Malesuada porta</dt>

                <dd><li>Etiam porta sem malesuada magna mollis euismod.</li></dd>

              </dl>

            </div>

          </div>

          <!-- /.box -->

        </div>   

          

       

            <!-- /.box-Resumen -->

       

        <div class="col-md-3">

          <div class="box box-solid">

            <div class="box-header with-border">

              <h3 class="box-title text-light-blue">Resumen del empleo</h3>

            </div>

            <div class="box-body">

              <dl>

                <dt>Description lists</dt>

                <dd>A description list is perfect for defining terms.</dd>

                <dt>Euismod</dt>

                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>

                <dd>Donec id elit non mi porta gravida at eget metus.</dd>

                <dt>Malesuada porta</dt>

                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>

              </dl>

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

  

<?php include 'inc/footer.php'?>

</div>

<!-- ./wrapper -->



<!-- jQuery 2.2.0 -->

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Bootstrap 3.3.6 -->

<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->

<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll -->

<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="plugins/fastclick/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

<!-- iCheck -->

<script src="plugins/iCheck/icheck.min.js"></script>

<script>

  $(function () {

    $('input').iCheck({

      checkboxClass: 'icheckbox_square-blue',

      radioClass: 'iradio_square-blue',

      increaseArea: '20%' // optional

    });

  });

</script>

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

</body>

</html>

