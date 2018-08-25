<div class="row">


        <div class="col-md-1"></div>

        <div class="col-md-10">


          <div class="box box-default collapsed-box">

            <div class="box-header with-border bg-navy">

             <i class="fa fa-th"></i>

              <h3 class="box-title">Publica Nuevos Avisos</h3>



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

              <li><a href="#Datos" data-toggle="tab">Nuevos Avisos</a></li>

              

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

                 <form method="post" action="https://empleosccb.com.mx/process/regPublicaciones.php" name="DatosPublicacion" class="form-horizontal">

					 <div class="row">

					 <div class="col-md-6">

                  <div class="form-group">

                    <label for="Puesto" class="col-sm-3 control-label">Puesto</label>



                    <div class="col-sm-8">

                      <input name="Puesto" type="text" class="form-control" id="inputName" placeholder="Puesto">

                    </div>

                  </div>

                  <div class="form-group">

                    <label for="Salario" class="col-sm-3 control-label">Salario</label>



                    <div class="col-sm-8">

                      <input name="Salario" type="text" class="form-control" id="inputApellidos" placeholder="Salario">

                    </div>

                  </div>

                  <div class="form-group">

                <label for="Area" class="col-sm-3 control-label">Area</label>

				<div class="col-sm-8">

                      <select required name="Area" class="form-control select2 select2-hidden-accessible" data-placeholder="Area profesional" style="width: 100%;">

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

                  </div>
                  
                  <div class="form-group">

                    <label for="Categoria" class="col-sm-3 control-label">Giro de la Empresa</label>



                    <div class="col-sm-8">

                      <select required name="Categoria" class="form-control select2" style="width: 100%;" data-placeholder="Selecciona Uno">

                  <option></option>

                  <option>Comercio</option>

                  <option>Industria</option>

                  <option>Servicios</option>

                </select>

                    </div>

                  </div>
                  
                  <div class="form-group">

                <label for="Empresa" class="col-sm-3 control-label">Empresa</label>

				<div class="col-sm-8">

                      <input name="Empresa" type="text" class="form-control" id="inputApellidos" placeholder="Empresa">

                    </div>

                  </div>

					</div>

                 <div class="col-md-6">

                   <div class="form-group">

                    <label for="jornada" class="col-sm-3 control-label">Tipo de Jornada</label>
                    
                    <div class="col-sm-8">

					<select name="jornada" class="form-control select2" data-placeholder="Tipo de Jornada" style="width: 100%;">

                  <option></option>

                  <option>Tiempo Completo</option>

                  <option>Medio Tiempo</option>

                  <option>Por Temporada</option>

                </select>

                  </div>
                  </div>

                   <div class="form-group">

                <label for="DescOf" class="col-sm-3 control-label">Descripcion de la Oferta</label>

				<div class="col-sm-8">

                      <input name="DescOf" type="text" class="form-control" id="inputApellidos" placeholder="Descripcion de la Oferta">
                      
                    </div>

                  </div>
                  
                   <div class="form-group">
				
                <label for="Ciudad" class="col-sm-3 control-label">Ciudad</label>

				<div class="col-sm-8">

                      <select name="Ciudad" class="form-control select2" data-placeholder="Lugar" style="width: 100%;">

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

                  </div>

                   <div class="form-group">

                <label for="direcc" class="col-sm-3 control-label">Direccion</label>

				<div class="col-sm-8">

                      <input name="direcc" type="text" class="form-control" id="inputApellidos" placeholder="Direccion de la Vacante">
                      
                    </div>

                  </div>
                  
                   <div class="form-group">

                <label for="discapacitados" class="col-sm-3 control-label">Oferta para discapacitados</label>

				<div class="col-sm-8">

                      <select required name="discapacitados" class="form-control select2" style="width: 100%;" data-placeholder="Oferta para discapacitados">

                  <option></option>

                  <option>Si</option>

                  <option>No</option>

                
                </select>

                    </div>

                  </div>                 

                  </div>
<?php 
$dt_DiasDespues = date('Y-m-d', strtotime('+'.$dr.' day')) ;
$dt = date('d-m-Y') ;
						 
?>
                  
					<input name="FechaP" value="<?php echo $dt; ?>" class="hidden">
					<input name="FechaTerminacion" value="<?php echo $dt_DiasDespues; ?>" class="hidden">
					<input name="NFactura" value="<?php echo $numContrato; ?>" class="hidden">
					<input name="Estatus" value="Activo" class="hidden">
                  </div>

              <div class="box-footer">
              <div class="box-body">
              
              <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      <h1><u>Descripcion de la Oferta</u></h1>
                      <h4>Subtitulo</h4>
                      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                      <ul>
                        <li>Lista item uno</li>
                        <li>Lista item dos</li>
                        <li>Lista item tres</li>
                        <li>Lista item cuatro</li>
                      </ul>
                      <p>Gracias,</p>
                      <p>EmpleosCCB</p>
                    </textarea>
              </div>
              
            </div>
               <button name="DatosPublicacion" type="submit" class="btn btn-info pull-right">Publicar</button>  
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

          



