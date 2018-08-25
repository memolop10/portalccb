<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Registro | Empresa</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- iCheck -->

  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

</head>

<body class="hold-transition register-page" id="container-page-registration">


<section id="form-registration">	
<div class="box">

<div class="register-box-body">  
<div class="form-group has-feedback pull-right">
<ul class="nav navbar-nav">
	  <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <i class="fa fa-power-off"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span>&nbsp;&nbsp; Iniciar Sesion si estas registrado</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                
                  
                 <li class="user-header" style="background-color: white">

                 <img src="../../dist/img/photo2.png" class="img-circle" alt="User Image">

</li> 
                  
                  
               
                <!-- Menu Body -->
               <li>
               	<!-- /.login-logo -->
  <div class="login-box-body">
    

    <form action="../../process/login.php" method="post" role="form"  class="" data-form="login">
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
</ul>        
</div>
<div class="form-group has-feedback">
&nbsp;
</div>
</div>		  
</div>
		  
		  
		  
		  
<div class="register-box">

   <div class="register-logo">
    
	 

    <a href="../"><b>empleos</b>CCB</a>

  </div>



  <div class="register-box-body">

    <p class="login-box-msg">Únete a empleosCCB</p>

	  

  



    <form name="reg-client" action="../../process/regclien.php" method="post" data-form="save">

      <div class="form-group has-feedback">

        <input name="clien-name" type="text" class="form-control" placeholder="Nombre de Contacto" data-toggle="tooltip" data-placement="top">

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input name="clien-email" type="email" class="form-control" placeholder="Correo Electrónico" data-toggle="tooltip" data-placement="top">

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input name="clien-pass" type="password" class="form-control" placeholder="Contraseña" data-toggle="tooltip" data-placement="top">

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>
      
      <div class="form-group has-feedback">

        <input name="RazonSocial" type="text" class="form-control" placeholder="Razon Social" data-toggle="tooltip" data-placement="top">

        <span class="fa fa-building-o form-control-feedback"></span>

      </div>
      
      <div class="form-group has-feedback">

        <input name="RFC" type="text" class="form-control" placeholder="RFC" data-toggle="tooltip" data-placement="top">

        <span class="fa fa-building-o form-control-feedback"></span>

      </div>
      
      <div class="form-group has-feedback">

        <input name="Direccion" type="text" class="form-control" placeholder="Direccion" data-toggle="tooltip" data-placement="top">

        <span class="fa fa-building-o form-control-feedback"></span>

      </div>
      
      <div class="form-group has-feedback">

        <input name="Telefono" type="text" class="form-control" placeholder="Telefono" data-toggle="tooltip" data-placement="top">

        <span class="fa fa-building-o form-control-feedback"></span>

      </div>

      <!--<div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Repite la Contraseña">

        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

      </div>-->

      <div class="row">

        <!--<div class="col-xs-8">

          <div class="checkbox icheck">

            <label>

              <input type="checkbox"> Estoy de acuerdo

            </label>

          </div>

        </div>-->

        <!-- /.col -->

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Registro</button>

        </div>

        <!-- /.col -->

      </div>

    </form>



    Con este registro admites que conoces totalmente y aceptas las  <a href="#">condiciones de uso,</a> y también estás de acuerdo con la <a href="#">política de confidencialidad.</a>

  </div>

  <!-- /.form-box -->

</div>

</section>

	

<!-- /.register-box -->



<!-- jQuery 2.2.0 -->

<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>

<!-- Bootstrap 3.3.6 -->

<script src="../../bootstrap/js/bootstrap.min.js"></script>

<!-- iCheck -->

<script src="../../plugins/iCheck/icheck.min.js"></script>

<script>

  $(function () {

    $('input').iCheck({

      checkboxClass: 'icheckbox_square-blue',

      radioClass: 'iradio_square-blue',

      increaseArea: '20%' // optional

    });

  });

</script>

</body>

</html>

