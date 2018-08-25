<div class="row">


        <div class="col-md-1"></div>

        <div class="col-md-10">


          <div class="box box-default collapsed-box">

            <div class="box-header with-border bg-navy">

             <i class="fa fa-th"></i>

              <h3 class="box-title">Llena el Perfil de Empresa</h3>



              <div class="box-tools pull-right">

                <button type="button" class="btn btn-flickr bg-o" data-widget="collapse">expandir...&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i>

                </button>

              </div>

              <!-- /.box-tools -->

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">

            

             <li class="dropdown open active pull-left header">

                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;Opciones&nbsp;&nbsp;<span class="caret"></span>

                </a><div class="dropdown-backdrop"></div>

                <ul class="dropdown-menu header">

              <li><a href="#Datos" data-toggle="tab">Perfil de Empresa</a></li>

              

                </ul>

              </li>

              

            </ul>

            

            <div class="tab-content">

             

             <!----------------------------------------------------------------------------------------------------------------------------------- /.Datos Personales -->

             

              <div class="active tab-pane" id="Datos">


            <div class="box-header">

             

    <?php 

	$emailEmpresa=$_SESSION['EmailEmpresa']; 
				
	?>

                 <form method="post" action="https://empleosccb.com.mx/process/updatePerfilE.php" name="DatosEmpresa" class="form-horizontal">

					 <div class="row">

					 <div class="col-md-6">

                  <div class="form-group">

                    <label for="NomUser" class="col-sm-3 control-label">Nombre Usuario</label>



                    <div class="col-sm-8">

                      <input name="NomUser" value="<?php echo $NombreC; ?>" type="text" class="form-control" id="inputName" placeholder="Nombre de Contacto">

                    </div>

                  </div>

                  <div class="form-group">

                    <label for="RazonS" class="col-sm-3 control-label">Razon Social</label>



                    <div class="col-sm-8">

                      <input name="RazonS" value="<?php echo $RazonSc; ?>" type="text" class="form-control" id="inputApellidos" placeholder="Razon Social de la Empresa">

                    </div>

                  </div>

                  <div class="form-group">

                <label for="RFC" class="col-sm-3 control-label">RFC</label>

				<div class="col-sm-8">

                      <input name="RFC" value="<?php echo $rfC; ?>" type="text" class="form-control" id="inputApellidos" placeholder="RFC de la Empresa">

                    </div>

                  </div>

					</div>

                 <div class="col-md-6">

                   <div class="form-group">

                    <label for="Tel" class="col-sm-3 control-label">Telefono</label>

					<div class="col-sm-8">

                      <input name="Tel" value="<?php echo $Tel; ?>" type="text" class="form-control" id="inputApellidos" placeholder="Telefono">

                    </div>

                  </div>

                   <div class="form-group">

                <label for="direcc" class="col-sm-3 control-label">Direccion</label>

				<div class="col-sm-8">

                      <input name="direcc" value="<?php echo $direccioN; ?>" type="text" class="form-control" id="inputApellidos" placeholder="Direccion de la Empresa">
                      
                      <input name="EmailE" class="hidden" value="<?php echo $fotoEmail; ?>">

                    </div>

                  </div>                 

                  </div>

                  </div>

              <div class="box-footer">
               <button name="DatosEmpresa" type="submit" class="btn btn-info pull-right">ACTUALIZAR</button>  
              </div>


</form>
                

                

    

                

             </div>    

              </div>

              

              

 <!----------------------------------------------------------------------------------------------------------------------------------- /.Exp. Profesional -->             


                

              </div>

              


                 

                

   			</div>

            </div> 

            </div>

            <!-- /.tab-content -->

          </div>

</div>

          



