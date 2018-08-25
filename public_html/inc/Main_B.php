  <?php 

    session_start(); 

    error_reporting(E_PARSE);

include '../library/configServer.php';

include '../library/consulSQL.php';

?>
 <header class="main-header"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="https://empleosccb.com.mx/Empresas/" class="navbar-brand"><b>Empleos</b>CCB</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://empleosccb.com.mx">Candidato </a></li>
            <li class="active"><a href="https://empleosccb.com.mx/Empresas/">Empresa</a></li>
            
            
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
           
           
           <?php
			
			  
			  
			  
	    
        	$fotoEmail= $_SESSION['EmailEmpresa'];
			
$proveedoresc3=  ejecutarSQL::consultar("select * from empresas where Email='".$_SESSION['EmailEmpresa']."'");

                                                           while($provc3=mysql_fetch_array($proveedoresc3)){

                                                                    $nombreF=$provc3['Foto'];

                                                                    
                                                            }			  
			  												
			  
			  
			  
			  
			  $resF=  ejecutarSQL::consultar("select * from empresas where Email='".$fotoEmail."'");
            $fotoEmpresa=$resF['Foto'];
                if(!$_SESSION['EmailEmpresa']==""){
					
					
					
					echo '
				
            <li><a href="https://empleosccb.com.mx/Empresas/Panel/">
                <i class="fa fa-newspaper-o"></i>
                <span class="hidden-xs">Panel</span>
              </a></li>
			  <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-power-off"></i>
                <span class="hidden-xs">Cerrar Sesion</span>
              </a>
              <ul class="dropdown-menu">
                  
				  
                 <li class="user-header">

                 <img src="https://empleosccb.com.mx/Empresas/Foto/'.$nombreF.'" class="img-circle" alt="User Image">

                  <p>
                    Empleos CCB
                    <small></small>
                  </p>

                </li> 
                  
                  
               
                <!-- Menu Body -->
               <li>
               	<!-- /.login-logo -->
  <div class="login-box-body">
    
    <form action="https://empleosccb.com.mx/process/logout.php" method="post" role="form"  class="" data-form="login">
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Salir</button>
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
				';

                }else if(!$_SESSION['EmailCandidato']==""){

                    $fotoEmail= $_SESSION['EmailCandidato'];
$proveedoresc3=  ejecutarSQL::consultar("select Foto from candidatos where Email='".$_SESSION['EmailCandidato']."'");
$provc3=mysql_fetch_array($proveedoresc3);
$nombreF=$provc3['Foto'];
				  
                    echo '

                    <li><a href="https://empleosccb.com.mx/Candidatos">
                <i class="fa fa-newspaper-o"></i>
                <span class="hidden-xs">Mi Perfil</span>
              </a></li>
            
			  
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-power-off"></i>
                <span class="hidden-xs">Cerrar Sesion</span>
              </a>
              <ul class="dropdown-menu">
                  
                 <li class="user-header">

                 <img src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/'.$nombreF.'" class="img-circle" alt="User Image">

                  <p>
                    Empleos CCB
                    <small></small>
                  </p>

                </li> 
                  
                  
               
                <!-- Menu Body -->
               <li>
               	<!-- /.login-logo -->
  <div class="login-box-body">
    
    <form action="https://empleosccb.com.mx/process/logout.php" method="post" role="form"  class="" data-form="login">
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Salir</button>
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
			  
			  ';

                }else{

                    echo '

                       <li title="únete a empleosCCB"><a href="Registro/">
                <i class="fa fa-line-chart"></i>
                <span class="hidden-xs">Unete</span>
              </a></li>
			  <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <i class="fa fa-power-off"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Iniciar Sesion</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                
                  
                 <li class="user-header">

                 <img src="../dist/img/photo2.png" class="img-circle" alt="User Image">

                  <p>
                    Empleos CCB
                    <small></small>
                  </p>

                </li> 
                  
                  
               
                <!-- Menu Body -->
               <li>
               	<!-- /.login-logo -->
  <div class="login-box-body">
    

    <form action="../process/login.php" method="post" role="form"  class="" data-form="login">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email-login">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="clave-login" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
<!--
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
-->
                   <div class="radio hidden">
                    <label>

                        <input type="radio" name="optionsRadios" value="option1">

                        Candidato

                    </label>

                 </div>

                 <div class="radio hidden">

                    <label>

                        <input type="radio" name="optionsRadios" value="option2" checked>

                         Empresa

                    </label>

                 </div>       

        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
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
            

                   ';

                }

                ?>
           
           
           
            <!-- Messages: style can be found in dropdown.less-->
            
            
            <!-- /.messages-menu -->

           
            
            <!-- User Account Menu -->
            
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  
 

