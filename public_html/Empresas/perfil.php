<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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

<?php include '../inc/Main_user.php'?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Main content -->
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <div class="row">
       
		  <div class="col-md-1"></div>
		 
       
        <div class="col-md-3">

          <!-- Profile Image -->
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <span class="pull-right badge bg-green" title="CVs Visto">seleccionado 31</span>
              <h3 class="widget-user-username">pEDRO oROPEZA</h3>
              <h5 class="widget-user-desc">MANAGER</h5>
              
              
            </div>
            <div class="box-footer ">
             
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">Perfil leído</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">Gestionando</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
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
          
          
          <!-- /.widget-user -->
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Datos" data-toggle="tab">Datos Personales</a></li>
              <li><a href="#Perfil" data-toggle="tab">Perfil Prof.</a></li>
              <li><a href="#Formacion" data-toggle="tab">Formación</a></li>
              
              <li><a href="#Configuracion" data-toggle="tab">Configuracion</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="Datos">
                 <div class="box-header with-border bg-blue">
              		<h3 class="box-title">Datos personales</h3>
            	 </div>
            <div class="box-header">
             
                 
                 
                 <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Apellidos</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder="Apellidos">
                    </div>
                  </div>
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Fecha de nacimiento</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-2">
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Día</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                </div>
                <div class="col-sm-4">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Mes</option>
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Diciembre</option>
                </select>
                </div>
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Año</option>
                  <option>2003</option>
                  <option>2002</option>
                  <option>2001</option>
                  <option>2000</option>
                  <option>1999</option>
                  <option>1998</option>
                  <option>1997</option>
                  <option>1996</option>
                  <option>1995</option>
                  <option>1994</option>
                  <option>1993</option>
                  <option>1992</option>
                  <option>1991</option>
                  <option>1990</option>
                  <option>1989</option>
                  <option>1988</option>
                  <option>1987</option>
                  <option>1986</option>
                  <option>1985</option>
                  <option>1984</option>
                  <option>1983</option>
                  <option>1982</option>
                  <option>1981</option>
                  <option>1980</option>
                  <option>1979</option>
                  <option>1978</option>
                  <option>1977</option>
                  <option>1976</option>
                  <option>1975</option>
                  <option>1974</option>
                  <option>1973</option>
                  <option>1972</option>
                  <option>1971</option>
                  <option>1970</option>
                  <option>1969</option>
                  <option>1968</option>
                  <option>1967</option>
                  <option>1966</option>
                  <option>1965</option>
                  <option>1964</option>
                  <option>1963</option>
                  <option>1962</option>
                  <option>1961</option>
                  <option>1960</option>
                  <option>1959</option>
                  <option>1958</option>
                  <option>1957</option>
                  <option>1956</option>
                  <option>1955</option>
                  <option>1954</option>
                  <option>1953</option>
                  <option>1952</option>
                  <option>1951</option>
                  <option>1950</option>
                  <option>1949</option>
                  <option>1948</option>
                  <option>1947</option>
                  <option>1946</option>
                  <option>1945</option>
                  <option>1944</option>
                  <option>1943</option>
                  <option>1942</option>
                  <option>1941</option>
                  <option>2040</option>
                  <option>2039</option>
                  <option>2038</option>
                  <option>2037</option>
                  <option>1936</option>
                  <option>1935</option>
                  <option>1934</option>
                  <option>1933</option>
                  <option>1932</option>
                  <option>1931</option>
                  <option>1930</option>
                  <option>1929</option>
                  <option>1928</option>
                  <option>1927</option>
                  <option>1926</option>
                  <option>1925</option>
                  <option>1924</option>
                  <option>1923</option>
                  <option>1922</option>
                  <option>1921</option>
                  <option>1920</option>
                  <option>1919</option>
                  <option>1918</option>
                  <option>1917</option>
                </select>
                </div>
              </div>
            </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Género</label>

                    <div class="box-body">
                     <div class="row">
                     <div class="form-group">
                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Hombre
                    </label>
                  </div>

                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      Mujer
                    </label>
                  </div>

                </div>
                    </div>
                    </div>
                  </div>
                  
                   <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Fecha de nacimiento</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-8">
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Estado civil</option>
                  <option>Soltero(a)</option>
                  <option>Casado(a)</option>
                  <option>Separado(a)/Divorciado(a)</option>
                  <option>Viudo(a)</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                   <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Telefono 1</label>

                    <div class="col-sm-8">
                      <!-- phone mask -->
              
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              
                    </div>
                  </div>
                   
                   <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Telefono 2</label>

                    <div class="col-sm-8">
                      <!-- phone mask -->
              
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Pais</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" value="México">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Estado</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder="ejemplo: CDMX">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Ciudad/Delegación</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder="ejemplo: Miguel Hidalgo">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Codigo Postal</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder=" C.P.">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Dirección</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder="Dirección">
                    </div>
                  </div>
                   
                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Nacionalidad</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder="Nacionalidad">
                    </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Licencia de conducir</label>

                    <div class="box-body">
                     <div class="row">
                     <div class="form-group">
                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      A
                    </label>
                  </div>

                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      B
                    </label>
                  </div>
                   
                   <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      C
                    </label>
                  </div>

                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      D
                    </label>
                  </div>
                   
                   <div class="checkbox col-sm-3">
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      No Tengo
                    </label>
                  </div>

                </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Dispones de vehículo propio</label>

                    <div class="box-body">
                     <div class="row">
                     <div class="form-group">
                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Sí
                    </label>
                  </div>

                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      No
                    </label>
                  </div>

                </div>
                    </div>
                    </div>
                  </div>
                   
                   <div class="form-group">
                    <label for="inputExperience" class="col-sm-3 control-label">Discapacidad</label>

                    <div class="box-body">
                     <div class="row">
                     <div class="form-group">
                  <div class="checkbox col-sm-1">
                    <label>
                      <input type="checkbox" class="minimal-red">
                      
                    </label>
                  </div>

                </div>
                    </div>
                    </div>
                  </div>
                  
                  
<!--
                  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
-->
                 
                  
                  <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-3 control-label">Inserta tu foto</label>

                    <div class="col-sm-8">
                      <input type="file" id="exampleInputFile" class="">
                  <p class="help-block">formato jpg/jpeg/gif/png/bmp. Peso máximo de 500Kb</p>
                    </div>
                  </div>
           
                  
<!--
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
-->
                </form>
             </div>    
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="Perfil">
            <div class="box-header with-border bg-blue">
              <h3 class="box-title">Experiencias profesionales</h3>
            </div>
            <div class="box-header">
             <form class="form-horizontal alinmid">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Empresa</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputName" placeholder="Empresa">
                    </div>
                  </div>
                  
                  
                  
                    <label for="inputExperience" class="col-sm-3 control-label">Valoración general de la empresa</label>

                    <div class="box-body">
                     <div class="row">
                    
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      2
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      4
                    </label>
                     <label>
                      <input type="radio" name="r1" class="minimal">
                      6
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      8
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      10
                    </label>
                  </div>


                
                    </div>
                    </div>
                  
                  
                  
                    <label for="inputExperience" class="col-sm-3 control-label">Salario y prestaciones</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      2
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      4
                    </label>
                     <label>
                      <input type="radio" name="r1" class="minimal">
                      6
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      8
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      10
                    </label>
                  </div>


             
                    </div>
                    </div>
                 
                  
                  
                  
                    <label for="inputExperience" class="col-sm-3 control-label alinmid">Oportunidades de carrera</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5 alinmid">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      2
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      4
                    </label>
                     <label>
                      <input type="radio" name="r1" class="minimal">
                      6
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      8
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      10
                    </label>
                  </div>


          
                    </div>
                    </div>
                  
                  
                  
                  
                
                    <label for="inputExperience" class="col-sm-3 control-label">Director general</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      2
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      4
                    </label>
                     <label>
                      <input type="radio" name="r1" class="minimal">
                      6
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      8
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      10
                    </label>
                  </div>


           
                    </div>
                    </div>
                
                  
                  
                  
                 
                    <label for="inputExperience" class="col-sm-3 control-label">Ambiente de trabajo</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      2
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      4
                    </label>
                     <label>
                      <input type="radio" name="r1" class="minimal">
                      6
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      8
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      10
                    </label>
                  </div>


             
                    </div>
                    </div>
                
                  
                   <label for="inputExperience" class="col-sm-3 control-label">¿Recomendarias trabajar aquí?</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Si
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      No
                    </label>
                    
                  </div>


             
                    </div>
                    </div>
              
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
               
                  
                  
                  
                  
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Giro de la Empresa</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-2">
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Día</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Cargo</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputName" placeholder="Empresa">
                    </div>
                  </div>
                  
                  
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Área</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-2">
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Día</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                  
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Periodo</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Mes</option>
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Diciembre</option>
                </select>
                <p class="help-block">desde</p>
                </div>
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Año</option>
                  <option>2003</option>
                  <option>2002</option>
                  <option>2001</option>
                  <option>2000</option>
                  <option>1999</option>
                  <option>1998</option>
                  <option>1997</option>
                  <option>1996</option>
                  <option>1995</option>
                  <option>1994</option>
                  <option>1993</option>
                  <option>1992</option>
                  <option>1991</option>
                  <option>1990</option>
                  <option>1989</option>
                  <option>1988</option>
                  <option>1987</option>
                  <option>1986</option>
                  <option>1985</option>
                  <option>1984</option>
                  <option>1983</option>
                  <option>1982</option>
                  <option>1981</option>
                  <option>1980</option>
                  <option>1979</option>
                  <option>1978</option>
                  <option>1977</option>
                  <option>1976</option>
                  <option>1975</option>
                  <option>1974</option>
                  <option>1973</option>
                  <option>1972</option>
                  <option>1971</option>
                  <option>1970</option>
                  <option>1969</option>
                  <option>1968</option>
                  <option>1967</option>
                  <option>1966</option>
                  <option>1965</option>
                  <option>1964</option>
                  <option>1963</option>
                  <option>1962</option>
                  <option>1961</option>
                  <option>1960</option>
                  <option>1959</option>
                  <option>1958</option>
                  <option>1957</option>
                  <option>1956</option>
                  <option>1955</option>
                  <option>1954</option>
                  <option>1953</option>
                  <option>1952</option>
                  <option>1951</option>
                  <option>1950</option>
                  <option>1949</option>
                  <option>1948</option>
                  <option>1947</option>
                  <option>1946</option>
                  <option>1945</option>
                  <option>1944</option>
                  <option>1943</option>
                  <option>1942</option>
                  <option>1941</option>
                  <option>2040</option>
                  <option>2039</option>
                  <option>2038</option>
                  <option>2037</option>
                  <option>1936</option>
                  <option>1935</option>
                  <option>1934</option>
                  <option>1933</option>
                  <option>1932</option>
                  <option>1931</option>
                  <option>1930</option>
                  <option>1929</option>
                  <option>1928</option>
                  <option>1927</option>
                  <option>1926</option>
                  <option>1925</option>
                  <option>1924</option>
                  <option>1923</option>
                  <option>1922</option>
                  <option>1921</option>
                  <option>1920</option>
                  <option>1919</option>
                  <option>1918</option>
                  <option>1917</option>
                </select>
                </div>
                
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Mes</option>
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Diciembre</option>
                </select>
                <p class="help-block">hasta</p>
                </div>
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Año</option>
                  <option>2003</option>
                  <option>2002</option>
                  <option>2001</option>
                  <option>2000</option>
                  <option>1999</option>
                  <option>1998</option>
                  <option>1997</option>
                  <option>1996</option>
                  <option>1995</option>
                  <option>1994</option>
                  <option>1993</option>
                  <option>1992</option>
                  <option>1991</option>
                  <option>1990</option>
                  <option>1989</option>
                  <option>1988</option>
                  <option>1987</option>
                  <option>1986</option>
                  <option>1985</option>
                  <option>1984</option>
                  <option>1983</option>
                  <option>1982</option>
                  <option>1981</option>
                  <option>1980</option>
                  <option>1979</option>
                  <option>1978</option>
                  <option>1977</option>
                  <option>1976</option>
                  <option>1975</option>
                  <option>1974</option>
                  <option>1973</option>
                  <option>1972</option>
                  <option>1971</option>
                  <option>1970</option>
                  <option>1969</option>
                  <option>1968</option>
                  <option>1967</option>
                  <option>1966</option>
                  <option>1965</option>
                  <option>1964</option>
                  <option>1963</option>
                  <option>1962</option>
                  <option>1961</option>
                  <option>1960</option>
                  <option>1959</option>
                  <option>1958</option>
                  <option>1957</option>
                  <option>1956</option>
                  <option>1955</option>
                  <option>1954</option>
                  <option>1953</option>
                  <option>1952</option>
                  <option>1951</option>
                  <option>1950</option>
                  <option>1949</option>
                  <option>1948</option>
                  <option>1947</option>
                  <option>1946</option>
                  <option>1945</option>
                  <option>1944</option>
                  <option>1943</option>
                  <option>1942</option>
                  <option>1941</option>
                  <option>2040</option>
                  <option>2039</option>
                  <option>2038</option>
                  <option>2037</option>
                  <option>1936</option>
                  <option>1935</option>
                  <option>1934</option>
                  <option>1933</option>
                  <option>1932</option>
                  <option>1931</option>
                  <option>1930</option>
                  <option>1929</option>
                  <option>1928</option>
                  <option>1927</option>
                  <option>1926</option>
                  <option>1925</option>
                  <option>1924</option>
                  <option>1923</option>
                  <option>1922</option>
                  <option>1921</option>
                  <option>1920</option>
                  <option>1919</option>
                  <option>1918</option>
                  <option>1917</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Funciones y logros del cargo</label>

                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" placeholder=". . ." maxlength="500"></textarea>
                  <p class="help-block">(máximo 500 carácteres)</p>
                    </div>
                  </div>
                  
                  
                  
                  
<!--
                  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
-->
                 
                
           
 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Añadir</button>
                    </div>
                  </div>

                </form>
             </div>    
                <div class="box-header with-border bg-blue">
              <h3 class="box-title">Perfil profesional</h3>
            </div>   
                <div class="box-header">
                <div class="col-md-12">
              <form class="form-horizontal">
               <div class="form-group">
                  <label>Cargo o título breve del currículum</label>
                  <input type="text" class="form-control" placeholder="Ej: Analista de credito y riesgo" maxlength="100">
                  <p class="help-block">(máximo 100 carácteres)</p>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Descripción breve de tu perfil profesional</label>
                  <textarea class="form-control" rows="3" placeholder="Ej: Amplia experiencia en el área  financiera de crédito . . ." maxlength="500"></textarea>
                  <p class="help-block">(máximo 500 carácteres)</p>
                  
                </div> 
                
                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Actualizar</button>
                    </div>
                  </div> 
					</form>
               </div>
                </div>    
               <div class="box-header with-border bg-blue">
              <h3 class="box-title">Preferencias de trabajo</h3>
            </div>             
                <div class="box-header">
                <div class="col-md-12">         
                 
					<form class="form-horizontal"> 
                 <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Puesto de trabajo deseado</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputName" placeholder="Empresa">
                    </div>
                  </div>
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Situación actual</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-8">
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Situación actual</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Área</label>
                <div class="box-body">
              <div class="row">
                <div class="col-sm-8">
                <select class="form-control select2" multiple="multiple" data-placeholder="Selecciona un área" style="width: 100%;">
                  <option>Administración / Oficina</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select><p class="help-block">Áreas seleccionadas</p>
              </div>
                 </div>
            </div>
                  </div> 
                  
                  
                  
                   <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Salario mínimo aceptado</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputName" placeholder="Empresa">
                      <p class="help-block">Neto mensual</p>
                    </div>
                  </div>  
                                   
                                         
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Estado</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputApellidos" placeholder="ejemplo: CDMX">
                    </div>
                  </div>      
                                    
                   <label for="inputExperience" class="col-sm-3 control-label">Disponibilidad para viajar</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Si
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      No
                    </label>
                    
                  </div>
                    </div>
                    </div> 
                                                     
                                                                              
                     <label for="inputExperience" class="col-sm-3 control-label">Disponibilidad para cambiar de residencia</label>

                    <div class="box-body">
                     <div class="row">
                     
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Si
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      No
                    </label>
                    
                  </div>
                    </div>
                    </div>                                                                                  
                                                                                                                                
                                                                                                                                                      
                                                      
                                                                        
                   </form>                 
                                                      
                </div>
                </div>               
              </div>
              
              <!-- /.Curriculum -->  
              <div class="tab-pane" id="Formacion">

                <div class="box-header with-border bg-blue">
              <h3 class="box-title">Formación</h3>
            </div>   
                
                
                <div class="box-header"> 
					<form class="form-horizontal alinmid">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Centro educativo</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputName" placeholder="Empresa">
                    </div>
                  </div>
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Nivel de estudios</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-8">
                 <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Nivel de estudios</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                  
                  
                  
                  <label for="inputExperience" class="col-sm-3 control-label">Estado</label>

                    <div class="box-body">
                     <div class="row">
                    
                  <div class="checkbox col-sm-8">
                    <label>
                      <input type="radio" name="r1" class="minimal" checked>
                      Culminado
                    </label>
                    <label>
                      <input type="radio" name="r1" class="minimal">
                      Cursando
                    </label>
                     <label>
                      <input type="radio" name="r1" class="minimal">
                      Abandonado / aplazado
                    </label>
                    
                  </div>


                
                    </div>
                    </div>
                  
                  
                  
                  
                  
                  <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">Periodo</label>
				<div class="box-body">
              <div class="row">
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Mes</option>
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Diciembre</option>
                </select>
                <p class="help-block">desde</p>
                </div>
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Año</option>
                  <option>2003</option>
                  <option>2002</option>
                  <option>2001</option>
                  <option>2000</option>
                  <option>1999</option>
                  <option>1998</option>
                  <option>1997</option>
                  <option>1996</option>
                  <option>1995</option>
                  <option>1994</option>
                  <option>1993</option>
                  <option>1992</option>
                  <option>1991</option>
                  <option>1990</option>
                  <option>1989</option>
                  <option>1988</option>
                  <option>1987</option>
                  <option>1986</option>
                  <option>1985</option>
                  <option>1984</option>
                  <option>1983</option>
                  <option>1982</option>
                  <option>1981</option>
                  <option>1980</option>
                  <option>1979</option>
                  <option>1978</option>
                  <option>1977</option>
                  <option>1976</option>
                  <option>1975</option>
                  <option>1974</option>
                  <option>1973</option>
                  <option>1972</option>
                  <option>1971</option>
                  <option>1970</option>
                  <option>1969</option>
                  <option>1968</option>
                  <option>1967</option>
                  <option>1966</option>
                  <option>1965</option>
                  <option>1964</option>
                  <option>1963</option>
                  <option>1962</option>
                  <option>1961</option>
                  <option>1960</option>
                  <option>1959</option>
                  <option>1958</option>
                  <option>1957</option>
                  <option>1956</option>
                  <option>1955</option>
                  <option>1954</option>
                  <option>1953</option>
                  <option>1952</option>
                  <option>1951</option>
                  <option>1950</option>
                  <option>1949</option>
                  <option>1948</option>
                  <option>1947</option>
                  <option>1946</option>
                  <option>1945</option>
                  <option>1944</option>
                  <option>1943</option>
                  <option>1942</option>
                  <option>1941</option>
                  <option>2040</option>
                  <option>2039</option>
                  <option>2038</option>
                  <option>2037</option>
                  <option>1936</option>
                  <option>1935</option>
                  <option>1934</option>
                  <option>1933</option>
                  <option>1932</option>
                  <option>1931</option>
                  <option>1930</option>
                  <option>1929</option>
                  <option>1928</option>
                  <option>1927</option>
                  <option>1926</option>
                  <option>1925</option>
                  <option>1924</option>
                  <option>1923</option>
                  <option>1922</option>
                  <option>1921</option>
                  <option>1920</option>
                  <option>1919</option>
                  <option>1918</option>
                  <option>1917</option>
                </select>
                </div>
                
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Mes</option>
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Diciembre</option>
                </select>
                <p class="help-block">hasta</p>
                </div>
                <div class="col-sm-2">
                  <select class="form-control select" style="width: 100%;">
                  <option selected="selected">Año</option>
                  <option>2003</option>
                  <option>2002</option>
                  <option>2001</option>
                  <option>2000</option>
                  <option>1999</option>
                  <option>1998</option>
                  <option>1997</option>
                  <option>1996</option>
                  <option>1995</option>
                  <option>1994</option>
                  <option>1993</option>
                  <option>1992</option>
                  <option>1991</option>
                  <option>1990</option>
                  <option>1989</option>
                  <option>1988</option>
                  <option>1987</option>
                  <option>1986</option>
                  <option>1985</option>
                  <option>1984</option>
                  <option>1983</option>
                  <option>1982</option>
                  <option>1981</option>
                  <option>1980</option>
                  <option>1979</option>
                  <option>1978</option>
                  <option>1977</option>
                  <option>1976</option>
                  <option>1975</option>
                  <option>1974</option>
                  <option>1973</option>
                  <option>1972</option>
                  <option>1971</option>
                  <option>1970</option>
                  <option>1969</option>
                  <option>1968</option>
                  <option>1967</option>
                  <option>1966</option>
                  <option>1965</option>
                  <option>1964</option>
                  <option>1963</option>
                  <option>1962</option>
                  <option>1961</option>
                  <option>1960</option>
                  <option>1959</option>
                  <option>1958</option>
                  <option>1957</option>
                  <option>1956</option>
                  <option>1955</option>
                  <option>1954</option>
                  <option>1953</option>
                  <option>1952</option>
                  <option>1951</option>
                  <option>1950</option>
                  <option>1949</option>
                  <option>1948</option>
                  <option>1947</option>
                  <option>1946</option>
                  <option>1945</option>
                  <option>1944</option>
                  <option>1943</option>
                  <option>1942</option>
                  <option>1941</option>
                  <option>2040</option>
                  <option>2039</option>
                  <option>2038</option>
                  <option>2037</option>
                  <option>1936</option>
                  <option>1935</option>
                  <option>1934</option>
                  <option>1933</option>
                  <option>1932</option>
                  <option>1931</option>
                  <option>1930</option>
                  <option>1929</option>
                  <option>1928</option>
                  <option>1927</option>
                  <option>1926</option>
                  <option>1925</option>
                  <option>1924</option>
                  <option>1923</option>
                  <option>1922</option>
                  <option>1921</option>
                  <option>1920</option>
                  <option>1919</option>
                  <option>1918</option>
                  <option>1917</option>
                </select>
                </div>
                
                
              </div>
            </div>
                  </div>
                  
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Añadir</button>
                    </div>
                  </div>
                  
                  
                </form>
                </div> 
                 
                 
                <div class="box-header with-border bg-blue">
              <h3 class="box-title">Idiomas</h3>
            </div> 
 
   			</div>

              <!-- /.tab-pane -->

              <div class="tab-pane" id="Configuracion">
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      
      <!-- /.row -->

   		
        </div>
        
        
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
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
