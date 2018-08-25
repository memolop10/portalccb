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
$postulados=$_POST['ofertadepostulados'];
$NOferta=$_POST['NOferta'];
$NContrato=$_POST['NContrato'];
$MailEmpresa=$_POST['MailEmpresa'];
$BusquedasP=$_POST['BusquedasP'];
/*-----------DATOS_Reward----------*/
$numContratoRW=$_POST['ContratoRW'];
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

	echo ' '.$RazonSc.' ' 

	?></h3>

              <h5 class="widget-user-desc"><?php 

	echo ' '.$_SESSION['EmailEmpresa'].' ' 

	?></h5>

                          

            </div>

            

          </div>
          
		  <div class="box-footer ">

              <div class="row">

                <div class="col-sm-3 border-right">

                  <div class="description-block">

<form name="contratO" method="post" action="https://empleosccb.com.mx/Empresas/Avisos/">                   
<input class="hide" name="Contrato" value="<?php echo ''.$numContratoRW.'' ?>">
                                    
                    <button class="btn btn-app">
                <i class="fa fa-mail-reply"></i> Regresar
              </button>
</form>
                 
                 
                 
                 
                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-3 border-right">

                  <div class="description-block">

                    <h5 class="description-header">13,000</h5>

                    <span class="description-text">Gestionando</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-3">

                  <div class="description-block">

                    <h5 class="description-header">35</h5>

                    <span class="description-text">Concluidos</span>

                  </div>

                  <!-- /.description-block -->

                </div>

                <!-- /.col -->

                <div class="col-sm-3">

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
               


                 
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">              

<div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
               
               <div class="row">
               <div class="col-sm-12">
               <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">&nbsp;</th>
                <th style="width: 150px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Puesto</th>
                <th style="width: 200px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Area</th>
                <th style="width: 200px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Ciudad</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nivel Educativo</th>
                <th style="width: 290px;" class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Gestion</th>
                </tr>
                </thead>
                <tbody>
                      
<?php 
$totalpost=  ejecutarSQL::consultar("
SELECT 
* 
FROM 
Postulados
WHERE
OfertaPublicada='".$postulados."'
");					
while ($totalPostulados=mysql_fetch_array($totalpost)){
$busqueda4=  ejecutarSQL::consultar("
SELECT 
Foto,
ID,
PuestoPT,
DescPP,
AreaPT,
EstadoPT,
Genero,
Email,
FechaNacio
FROM 
candidatos
WHERE
ID='".$totalPostulados['IDcandidato']."'
");
$BuscarCV2=mysql_fetch_array($busqueda4);	
	
	echo '
	
	
	
	<tr role="row" class="odd">
                  <td><div class="product-img"><img src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/'.$BuscarCV2['Foto'].'" alt="" title="Da 		click para ver mas detalles"  style="max-height: 60px"></div>
				  <form name="CandidatosCV" method="post" action="https://empleosccb.com.mx/Empresas/Perfil/">
				  <button class="btn btn-app pull-right info-box-text description-header" style="max-height: 30px; padding-top: 5px;">Detalles
				  <input name="NumOferta" value="'.$postulados.'" class="hidden">
				  <input name="NumContrato" value="'.$NContrato.'" class="hidden">
				  <input name="Mail_Empresa" value="'.$fotoEmail.'" class="hidden">
				  <input name="ID_Candidato" value="'.$BuscarCV2['ID'].'" class="hidden">
				  </button>
				  </form>
				  </td>
                  <td><a class="info-box-text description-header text-light-blue">'.$BuscarCV2['PuestoPT'].'</a>
				  
				  </td>
                  <td><span class="description-header"> '.$BuscarCV2['AreaPT'].'</span></td>
                  <td><span class="">'.$BuscarCV2['EstadoPT'].'</span></td>
	  			  <td>';
					
				    $formacionP=  ejecutarSQL::consultar("SELECT * FROM formacion WHERE IDCandidato='".$BuscarCV2['ID']."'");
					while($FormacioNP=mysql_fetch_array($formacion)){
					$nivelP=$FormacioNP['NivelE'];
					$nivelCP=$FormacioNP['IDCandidato'];
					$nivelEP=$FormacioNP['CentroE'];
					}
	
					if($BuscarCV['ID']==$nivelC){
						
					$NivellP=  ejecutarSQL::consultar("SELECT * FROM formacion WHERE IDCandidato='".$BuscarCV2['ID']."'");
					while($NivellEP=mysql_fetch_array($NivellP)){
					$DatosNivelP=$NivellEP['NivelE'];
					
					echo ' <span class=""> 
					
					<button class="btn btn-app pull-right" style="max-height: 30px; padding-top: 5px;" title="'.$DatosNivelP.'">
                <i class="fa fa-university"></i>
              </button>
					
					';
					
					}

                      			  
				  
					echo '</span>
							</td>';                                               

                    }else{

                    echo ' <span class=""> ';			  
				  
					echo '</span>
							</td>
	</tr>
	
	';  

                    }


	echo ' 
			<td>
<form name="Postulados" method="post" action="https://empleosccb.com.mx/process/Gestion_postulados.php">

					 <div class="row">

					 

                 <div class="col-md-12">

                   <div class="form-group">

                    
                    
                    <div class="col-md-6">
					';
	
$Updategestion=  ejecutarSQL::consultar("select * from Postulados where IDcandidato='".$totalPostulados['IDcandidato']."' ");
$gestion9=mysql_fetch_array($Updategestion);   
	$fin=$gestion9['Num'];
		
	
			echo'  
		 		<select name="contactar" class="form-control text-light-blue"  style="width: 180px;" data-placeholder="se a contactado?">  
		 		  <option value="'.$gestion9['contactar'].'" class="text-muted">'.$gestion9['contactar'].'</option>
                  <option value="Ya se contacto" class="text-muted">Ya se contacto</option>
                  <option value="No se a contactado" class="text-muted">No se a contactado</option>
                  <option value="No cumple con el perfil" class="text-muted">No cumple con el perfil</option>
                </select>';			

	echo '			
					


                  </div>
                  </div>

                   <div class="form-group">

                

				<div class="col-md-6">

                      <input value="'.$gestion9['fecha'].'" style="border: none" name="Fecha" type="text" class="form-control" id="Entrevista" placeholder="Fecha">
                      
                    </div>

                  </div>
                  
                  <div class="form-group">

                

				<div class="col-md-6">

                      <input value="'.$gestion9['hora'].'" style="border: none" name="hora" type="text" class="form-control" id="fechahora" placeholder="Hora">
                      
                    </div>

                  </div>
                  </div>
                  
                   
                  </div>
				  
				 
				  <input name="Num" value="'.$fin.'" class="hidden">
                 <button class="badge btn-bitbucket pull-right"">Actualizar</button>


</form>
			 </td>
	';
		
}
					?>

				<!-- User Account Menu -->
     		                                          
    
                
                 
                 </tbody>
                <tfoot>
                <tr>
                <th rowspan="1" colspan="1">&nbsp;</th>
                <th rowspan="1" colspan="1">&nbsp;</th>
                <th rowspan="1" colspan="1">&nbsp;</th>
                <th rowspan="1" colspan="1">&nbsp;</th>
                <th rowspan="1" colspan="1">&nbsp;</th>
                <th rowspan="1" colspan="1">&nbsp;</th></tr>
                </tfoot>
              </table>
              </div>
              </div>
              </div>
            </div>
            
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

      "searching": false,

      "ordering": true,

      "info": false,

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

