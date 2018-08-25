<?php 

    session_start(); 

    error_reporting(E_PARSE);

    if(!isset($_SESSION['contador'])){

        $_SESSION['contador'] = 0;

    }

?>



<nav id="navbar-auto-hidden">

        <div class="row hidden-xs"><!-- Menu computadoras y tablets -->

            <div class="col-xs-10">
				<figure><img src="http://tuzuper.com/OnlineStore/assets/img/TU_ZUPER.png"; style="height: 70px; float: left; padding-left: 20px; vertical-align: middle;"><img src="http://tuzuper.com/OnlineStore/assets/img/logo.jpg"; style="height: 70px; float: left; padding-left: 20px; vertical-align: middle;"></figure>
                

          <p class="text-navbar tittles-pages-logo"></p>

            </div>
        
            <div class="col-xs-2">

                <div class="contenedor-tabla pull-right">

                    <div class="contenedor-tr">

                        <!--<a href="index.php" class="table-cell-td">Inicio</a>-->

                        
<!--/*<a href="configAdmin.php" class="table-cell-td">Administración</a>*/-->
                        <?php

                            if(!$_SESSION['nombreAdmin']==""){

                                echo ' 

                                    


                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">

                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Salir                       </a>

                                 ';

                            }else if(!$_SESSION['nombreUser']==""){

                                echo ' 

                                    <a href="pedido.php" class="table-cell-td">Usuarios</a>


                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">

                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'

                                    </a>

                                 ';

                            }

                        ?>

                    </div>

                </div>

            </div>

        </div>

        <div class="row visible-xs"><!-- Mobile menu navbar -->

            <div class="col-xs-12">

                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">

                    <i class="fa fa-th-list"></i>&nbsp;&nbsp;Menú

                </button>

                <a href="#" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Hacer Pedido">

                    <i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>

                </a>

                <?php

                if(!$_SESSION['nombreAdmin']==""){echo '

                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">

                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreAdmin'].' 

                    </a>';

                }else if(!$_SESSION['nombreUser']==""){

                    echo '

                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">

                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreUser'].' 

                    </a>';

                }else{

                    echo '

                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs">

                        <i class="fa fa-user"></i>&nbsp; Iniciar Sesión

                        </a> 

                   ';

                }

                ?>

            </div>

        </div>

    </nav>

    <!-- Modal login -->

    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

      <div class="modal-dialog modal-sm">

          <div class="modal-content" id="modal-form-login">

                <div class="modal-header">

                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                  <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión</h4>

                </div>

            <form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">

                  <div class="form-group">

                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>

                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>

                  </div>

                  <div class="form-group">

                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>

                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>

                  </div>



                  <p>¿Cómo iniciaras sesión?</p>

                  <div class="radio">

                    <label>

                        <input type="radio" name="optionsRadios" value="option1" checked>

                        Usuario

                    </label>

                 </div>

                 <div class="radio">

                    <label>

                        <input type="radio" name="optionsRadios" value="option2">

                         Administrador

                    </label>

                 </div>

                  <div class="modal-footer">

                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>

                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>

                  </div>

                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>

              </form>

          </div>

      </div>

    </div>

    <!-- Fin Modal login -->

    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">

        <br>

        <h3 class="text-center tittles-pages-logo">tuzuper.com</h3>

        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">

        <i class="fa fa-times"></i>

        </button>

        <br><br>

        <ul class="list-unstyled text-center">

            <li><a href="index.php">Inicio</a></li>

            <li><a href="product.php">Quienes somos?</a></li>

            <?php 

                if(!$_SESSION['nombreAdmin']==""){

                    echo '<li><a href="configAdmin.php">Administración</a></li>';

                }elseif(!$_SESSION['nombreUser']==""){

                    echo '<li><a href="pedido.php">Pedido</a></li>';

                }else{

                    echo '<li><a href="registration.php">Registro</a></li>';

                }

            ?>

        </ul>

    </div>



    

    <!-- Modal logout -->

    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">

      <div class="modal-dialog modal-sm">

        <div class="modal-content">

            <br>

            <p class="text-center">¿Quieres cerrar la sesión?</p>

            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>

            <p class="text-center">

                <a href="process/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>


            </p>

          </div>

      </div>

    </div>

    <!-- Fin Modal logout -->