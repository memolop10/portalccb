<div class="row">


        <div class="col-md-1"></div>

        <div class="col-md-10">


          <div class="box box-default collapsed-box">

            <div class="box-header with-border bg-navy">

             <i class="fa fa-th"></i>

              <h3 class="box-title">Llena tu CV</h3>



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

              <li><a href="#Datos" data-toggle="tab">Datos Personales</a></li>

              <li><a href="#Perfil" data-toggle="tab">Exp. Profesional</a></li>

              <li><a href="#PerfilProf" data-toggle="tab">Perfil Profesional</a></li>

              <li><a href="#PrefdeTrabajo" data-toggle="tab">Preferencias de Trabajo</a></li>

              <li><a href="#Formacion" data-toggle="tab">Formación</a></li>

                </ul>

              </li>

              

            </ul>

            

            <div class="tab-content">

             

             <!----------------------------------------------------------------------------------------------------------------------------------- /.Datos Personales -->

             

              <div class="active tab-pane" id="Datos">


            <div class="box-header">

             

    <?php 

	$IDcandidato=$_SESSION['EmailCandidato']; 
				
	?>

                 

                 <form method="post" action="../process/updateDPuser.php" name="DatosPersonales" class="form-horizontal">

                 

                 

                 

					 <div class="row">

					 <div class="col-md-6">

                 

                 

                  <div class="form-group">

                    <label for="inputName" class="col-sm-3 control-label">Nombre</label>



                    <div class="col-sm-8">

                      <input name="nombreR" value="<?php echo $nombreR; ?>" type="text" class="form-control" id="inputName" placeholder="Nombre Real">

                    </div>

                  </div>

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Apellidos</label>



                    <div class="col-sm-8">

                      <input name="apellidoR" value="<?php echo $apellido; ?>" type="text" class="form-control" id="inputApellidos" placeholder="Apellidos">

                    </div>

                  </div>

                  

                  <div class="form-group">

                <label for="inputName" class="col-sm-3 control-label">Fecha de nacimiento</label>

				<div class="box-body">

              <div class="row">

                <div class="col-sm-8">

                <div class="input-group date">

                  <div class="input-group-addon">

                    <i class="fa fa-calendar"></i>

                  </div>

                  <input name="Nacio" value="<?php echo $nacio; ?>" type="text" class="form-control pull-right" id="datepicker">

                </div>

                </div>

              </div>

            </div>

                  </div>

                  

                   <div class="form-group">

                    <label for="inputExperience" class="col-sm-3 control-label">Género</label>



                    <div class="box-body">

                     <div class="row">

                     

                  <div class="col-sm-8">
                                          
                      <select name="Genero" class="form-control select2" data-placeholder="Genero" style="width: 100%;">

                  <option><?php echo $genero; ?></option>
                  
                  

                  <option>Hombre</option>

                  <option>Mujer</option>

                  <option>Otro</option>

                </select>


                  </div>



                 

            

                    </div>

                    </div>

                  </div>

                  

                   <div class="form-group">

                <label for="inputName" class="col-sm-3 control-label">Estado Civil</label>

				<div class="box-body">

              <div class="row">

                <div class="col-sm-8">

                 <select name="EstadoCivil" class="form-control select2" data-placeholder="Estado Civil" style="width: 100%;">

                  <option><?php echo $edocivil; ?></option>
                  
                  

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

                  <input name="Tel1CV" value="<?php echo $tel1; ?>" type="text" class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>

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

                  <input name="Tel2CV" value="<?php echo $tel2; ?>" type="text" class="form-control" data-inputmask='"mask": "(99) 9999-9999"' data-mask>

                </div>

                <!-- /.input group -->

              

                    </div>

                  </div>

                  

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Pais</label>



                    <div class="col-sm-8">

                      <input name="PaisCV" value="<?php echo $pais; ?>" type="text" class="form-control" id="PaisCV" placeholder="ejemplo: México">

                    </div>

                  </div>

                  

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Estado</label>



                    <div class="col-sm-8">

                      <input name="EstadoCV" value="<?php echo $edo; ?>" type="text" class="form-control" id="EstadoCV" placeholder="ejemplo: CDMX">

                    </div>

                  </div>

                  

					</div>

                 <div class="col-md-6">

                 

                  

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Ciudad/Delegación</label>



                    <div class="col-sm-8">

                      <input name="CDDeleg" value="<?php echo $cddelg; ?>" type="text" class="form-control" placeholder="ejemplo: Miguel Hidalgo">

                    </div>

                  </div>

                  

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Codigo Postal</label>



                    <div class="col-sm-8">

                      <input name="CP" type="text" value="<?php echo $cp; ?>" class="form-control" placeholder=" C.P.">

                    </div>

                  </div>

                  

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Dirección</label>



                    <div class="col-sm-8">

                      <input name="Direccion" value="<?php echo $direccion; ?>" type="text" class="form-control" id="inputApellidos" placeholder="Dirección">

                    </div>

                  </div>

                   

                   <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Nacionalidad</label>



                    <div class="col-sm-8">

                      <input name="Nacionalidad" value="<?php echo $nacionalidad; ?>" type="text" class="form-control" placeholder="Nacionalidad">

                    </div>

                  </div>

                  

                  

                  <div class="form-group">

                    <label for="inputExperience" class="col-sm-3 control-label">Licencia de conducir</label>



                    <div class="box-body">

                     <div class="row">

                   

                  <div class="checkbox col-sm-8">
						
               <select name="Licencia" class="form-control select2" data-placeholder="Licencia de Conducir" style="width: 100%;">

                  <option><?php echo $licencia; ?></option>

                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                  <option>D</option>
                  <option>NO Tengo</option>

                </select>

                  </div>





               

                    </div>

                    </div>

                  </div>

                  

                  <div class="form-group">

                    <label for="inputExperience" class="col-sm-3 control-label">Dispones de vehículo propio</label>



                    <div class="box-body">

                     <div class="row">

                    

                  <div class="checkbox col-sm-8">

                   <select name="Vehiculo" class="form-control select2" data-placeholder="Vehiculo" style="width: 100%;">

                  <option><?php echo $vehiculo; ?></option>

                  <option>Si</option>
                  <option>No</option>
                  
                </select>
                    

                  </div>



                

                    </div>

                    </div>

                  </div>

                   

                   <div class="form-group">

                    <label for="inputExperience" class="col-sm-3 control-label">Discapacidad</label>



                    <div class="box-body">

                     <div class="row">

                     

                  <div class="checkbox col-sm-8">

                    <select name="Discapacidad" class="form-control select2" data-placeholder="Tienes alguna Discapacidad" style="width: 100%;">

                  <option><?php echo $discapa; ?></option>

                  <option>Si</option>
                  <option>No</option>
                  
                </select>

                                       

                  </div>



              <input name="IDCandidato" type="text" value="<?php echo $IDcandidato ?>" class="hide">

                    </div>

                    </div>

                  </div>

                  

           

                  </div>

                  </div>



              <div class="box-footer">
               <button type="submit" class="btn btn-info pull-right">ACTUALIZAR</button>
               
               

              </div>


</form>
                

                

    

                

             </div>    

              </div>

              

              

 <!----------------------------------------------------------------------------------------------------------------------------------- /.Exp. Profesional -->             

              

              

              <!-- /.tab-pane -->

              <div class="tab-pane" id="Perfil">

            

            <div class="box-header">

            
            

                 

                 <form name="ExpProf" method="post" action="../process/regExpProf.php" class="form-horizontal alinmid">

                 <div class="row">

					 <div class="col-md-6">

                 

                  <div class="form-group">

                    <label for="inputName" class="col-sm-3 control-label">Empresa</label>



                    <div class="col-sm-8">

                      <input required name="empresa" type="text" class="form-control" placeholder="Empresa">

                    </div>

                  </div>                  

                

                  <div class="form-group">

                

				<div class="box-body">

              <div class="row">

               <label for="inputName" class="col-sm-3 control-label">Giro de la Empresa</label>

                <div class="col-sm-3">

                 <select required name="giro" class="form-control select2" style="width: 100%;" data-placeholder="Selecciona Uno">

                  <option></option>

                  <option>Comercio</option>

                  <option>Industria</option>

                  <option>Servicios</option>

                </select>

                </div>

                <label for="inputName" class="col-sm-2 control-label">Área</label>

                <div class="col-sm-3">

                 <select required name="area" class="form-control select2 select2-hidden-accessible" data-placeholder="Escribe cargo o área profesional" style="width: 100%;">

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

            </div>

                  </div>

                                  

                  <div class="form-group">

                    <label for="inputName" class="col-sm-3 control-label">Cargo</label>



                    <div class="col-sm-8">

                      <input required name="cargo" type="text" class="form-control" placeholder="Cargo">

                    </div>

                  </div>

                                  

                  	 </div>

            

            		<div class="col-md-6">

            		

					 <div class="form-group">

                <label for="inputName" class="col-sm-3 control-label">Periodo</label>

				<div class="box-body">

              <div class="row">

                <div class="col-sm-4">

                  

                <div class="input-group date">

                  <div class="input-group-addon">

                    <i class="fa fa-calendar"></i>

                  </div>

                  <input required name="desde" type="text" class="form-control pull-right" id="desde">

                </div>

                

                <p class="help-block">Desde</p>

                </div>

                <div class="col-sm-4">

                  

                <div class="input-group date">

                  <div class="input-group-addon">

                    <i class="fa fa-calendar"></i>

                  </div>

                  <input required name="hasta" type="text" class="form-control pull-right" id="hasta">

                </div>

                

                <p class="help-block">Hasta</p>

                </div>

                

                

                

                

                

              </div>

            </div>

                  </div>

                  

                  

                  

                  <div class="form-group">

                    <label for="inputName" class="col-sm-3 control-label">Funciones y logros del cargo</label>



                    <div class="col-sm-8">

                      <textarea required name="funciones" class="form-control" rows="3" placeholder=". . ." maxlength="500"></textarea>

                      <input name="IDCandidato" value="<?php echo $fotoEmail; ?>" type="text" class="hide">

                  <p class="help-block">(máximo 500 carácteres)</p>

                    </div>

                  </div>

                                

                  

              	  

            

            		</div>

             

             

             

             

              </div>

              <div class="box-footer">
<button name="ExpProf" type="submit" class="btn btn-info pull-right">Agregar</button>
 </form>                 
                                    
                                                      
<?php 	
$paquetes=  ejecutarSQL::consultar("
SELECT 
ID,
Empresa,
Candidato 
FROM 
exp_profesional
WHERE 
Candidato='".$_SESSION['EmailCandidato']."'");
while($resPaquetes=mysql_fetch_array($paquetes)){
echo ' 
	<form name="'.$resPaquetes['Empresa'].'" method="post" action="https://empleosccb.com.mx/process/delExpProf.php">
	<button name="'.$resPaquetes['Empresa'].'" class="btn btn-app pull-left" type="submit">
                <span class="badge bg-red">Eliminar</span>
                <i class="fa fa-industry"></i> '.$resPaquetes['Empresa'].'
                <input name="ExpProfID" value="'.$resPaquetes['ID'].'"  class="hidden">
                 
                
              </button>
			  </form>
';
}
?>                                                                        
                                                                                          
   

                 
                 
                  

              	  </div>

               

               

                

             </div>    



                

              </div>

              

              <!-- /.Curriculum -->  

              <div class="tab-pane" id="Formacion">

  

                

                <div class="box-header">

                 

					<form name="CentroE" method="post" action="../process/regFormacion.php" class="form-horizontal alinmid">

                  <div class="form-group">

                    <label for="inputName" class="col-sm-3 control-label">Centro educativo</label>



                    <div class="col-sm-8">

                      <input required name="centroe" type="text" class="form-control" placeholder="Centro educativo">

                    </div>

                  </div>

                  

                  <div class="form-group">

                <label for="inputName" class="col-sm-3 control-label">Nivel de estudios</label>

				<div class="box-body">

              <div class="row">

                <div class="col-sm-8">

                 <select required name="nivele" class="form-control select" style="width: 100%;" data-placeholder="Nivel de Estudios">

                 <option></option>

                 <option value="Educación primaria">Educación primaria</option>

                 <option value="Educación secundaria">Educación secundaria</option>

                 <option value="Educación media superior -Bachillerato General">Educación media superior -Bachillerato General</option><option value="Educación media superior - Educación Profesional">Educación media superior - Educación Profesional </option><option value="Educación media superior - Bachillerato Tecnológico">Educación media superior - Bachillerato Tecnológico</option><option value="Educación superior - Licenciatura">Educación superior - Licenciatura</option>

                 <option value="Educación superior - Especialidad">Educación superior - Especialidad</option>

                 <option value="Educación superior - Maestría">Educación superior - Maestría</option>

                 <option value="Educación superior - Doctorado">Educación superior - Doctorado</option>

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

                      <input required type="radio" name="estado" class="minimal" value="Culminado">

                      Culminado

                    </label>

                    <label>

                      <input required type="radio" name="estado" class="minimal" value="Cursando">

                      Cursando

                    </label>

                     <label>

                      <input required type="radio" name="estado" class="minimal" value="Abandonado/Aplazado">

                      Abandonado / aplazado

                    </label>

                    

                  </div>





                

                    </div>

                    </div>

                  

                  

                  

                  

                  

                  <div class="form-group">

                <label class="col-sm-3 control-label">Periodo</label>

				<div class="box-body">

              <div class="row">

                <div class="col-sm-4">

                  

                <div class="input-group date">

                  <div class="input-group-addon">

                    <i class="fa fa-calendar"></i>

                  </div>

                  <input required name="desde" type="text" class="form-control pull-right">

                </div>

                

                <p class="help-block">Desde</p>

                </div>

                <div class="col-sm-4">

                  

                <div class="input-group date">

                  <div class="input-group-addon">

                    <i class="fa fa-calendar"></i>

                  </div>

                  <input required name="hasta" type="text" class="form-control pull-right">

                  

                  <input name="IDCandidato" type="text" value="<?php echo $fotoEmail ?>" class="hide">

                </div>

                

                <p class="help-block">Hasta</p>

                </div>

                

                

                

                

                

              </div>

            </div>

                  </div>

                  

                  <div class="box-footer">

                  <button name="CentroE" type="submit" class="btn btn-info pull-right">Agregar</button>
 </form>
             	  
<?php 	
$centro=  ejecutarSQL::consultar("
SELECT 
ID,
CentroE,
Candidato 
FROM 
formacion
WHERE 
Candidato='".$_SESSION['EmailCandidato']."'");
while($centroE=mysql_fetch_array($centro)){
echo ' 
	<form name="'.$centroE['ID'].'" method="post" action="https://empleosccb.com.mx/process/delCentroE.php">
	<button name="'.$centroE['ID'].'" class="btn btn-app pull-left" type="submit">
                <span class="badge bg-red">Eliminar</span>
                <i class="fa fa-industry"></i> '.$centroE['CentroE'].'
                <input name="ExpProfID" value="'.$centroE['ID'].'"  class="hidden">
                 
                
              </button>
			  </form>
';
}
?>             	  
             	  
             	  
             	  
             	  
             	  
             	  
             	  
             	  
              	  </div>

                  

                  

               

                </div> 

                 

                

   			</div>



              <!-- /.PERFIL PROFESIONAL -->



              <div class="tab-pane" id="PerfilProf">

                

               <div class="box-header">

                <div class="col-md-12">

              <form name="perfilPROF" method="post" action="https://empleosccb.com.mx/process/regPerfProf.php" class="form-horizontal">

               <div class="form-group">

                  <label>Cargo o título breve del currículum</label>

                  <input name="cargopp" type="text" class="form-control" placeholder="Ej: Analista de credito y riesgo" maxlength="100" required>

                  <p class="help-block">(máximo 100 carácteres)</p>

                </div>

                <!-- textarea -->

                <div class="form-group">

                  <label>Descripción breve de tu perfil profesional</label>

                  <textarea required name="descpp" class="form-control" rows="3" placeholder="Ej: Amplia experiencia en el área  financiera de crédito . . ." maxlength="500"></textarea>

                  <input name="IDCandidato" type="text" value="<?php echo $fotoEmail ?>" class="hide">

                </div>

                  <p class="help-block">(máximo 500 carácteres)</p>

                  

                 

                

                 

                  <div class="box-footer">

<button name="perfilPROF" type="submit" class="btn btn-info pull-right">ACTUALIZAR</button>
					  </form>
             	  
             	  
<?php 	
$PProf=  ejecutarSQL::consultar("
SELECT 
ID,
Cargo 
FROM 
perfil_prof
WHERE 
Candidato='".$_SESSION['EmailCandidato']."'");
while($pProff=mysql_fetch_array($PProf)){
echo ' 
	<form name="'.$pProff['ID'].'" method="post" action="https://empleosccb.com.mx/process/delPerfProf.php">
	<button name="'.$pProff['ID'].'" class="btn btn-app pull-left" type="submit">
                <span class="badge bg-red">Eliminar</span>
                <i class="fa fa-industry"></i> '.$pProff['Cargo'].'
                <input name="pProfID" value="'.$pProff['ID'].'"  class="hidden">
                 
                
              </button>
			  </form>
';
}
?>             	  
             	  
             	  
             	  
             	  
             	  
             	  
              	  </div> 

					
              
              
              

              </div>

               </div>

                </div> 

               

              

              <!-- /.tab-pane -->

              

              

              

              <div class="tab-pane" id="PrefdeTrabajo">

                

               <div class="box-header">

                <div class="col-md-12">         

                 

					<form name="PrefTrabajo" method="post" action="https://empleosccb.com.mx/process/updatePT.php" class="form-horizontal"> 

                 <div class="form-group">

                    <label for="inputName" class="col-sm-3 control-label">Puesto de trabajo deseado</label>



                    <div class="col-sm-8">

                      <input required value="<?php echo $puestOPT; ?>" name="puestopt" type="text" class="form-control" placeholder="Empresa">

                    </div>

                  </div>

                  

                  <div class="form-group">

                <label for="inputName" class="col-sm-3 control-label">Situación actual</label>

				<div class="box-body">

              <div class="row">

                <div class="col-sm-8">

                 <select required name="situacionlpt" class="form-control select2" style="width: 100%;" data-placeholder="Situación actual">

                  <option><?php echo $situacion; ?></option>

                  <option>No tengo empleo</option>

                  <option>Estoy buscando trabajo activamente</option>

                  <option>Estoy trabajando actualmente</option>

                  <option>No busco trabajo pero estoy dispuesto a escuchar ofertas</option>

                  <option>No tengo ningún interés en un nuevo empleo</option>

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

                <select required name="areapt" class="form-control" data-placeholder="Selecciona un área" style="width: 100%;">

                  <option><?php echo $area; ?></option>

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

            </div>

                  </div> 

                  

                  

                  

                   <div class="form-group">



                    <label for="inputName" class="col-sm-3 control-label">Salario mínimo aceptado</label>



                    <div class="col-sm-8">

                      <input value="<?php echo $salario; ?>" required name="salariompt" type="text" class="form-control" placeholder="ejemplo: $10,000">

                      <p class="help-block">Neto mensual</p>

                    </div>

                  </div>  

                                   

                                         

                  

                  <div class="form-group">

                    <label for="inputEmail" class="col-sm-3 control-label">Estado</label>



                    <div class="col-sm-8">

                      <input value="<?php echo $estadopt; ?>" required name="estadopt" type="text" class="form-control" placeholder="ejemplo: CDMX">

                    </div>

                  </div>      

                    

                                    

                   <div class="form-group">                                                 

                   <label for="inputExperience" class="col-sm-3 control-label">Disponibilidad para viajar</label>



                    <div class="box-body">

                     <div class="row">

                     

                  <div class="checkbox col-sm-5">

                <select required name="viajarpt" class="form-control select2" style="width: 100%;" data-placeholder="Situación actual">

                  <option><?php echo $viajar; ?></option>

                  <option>Si</option>

                  <option>No</option>

                
                </select>

                  </div>

                    </div>

                    </div> 

						</div> 

                                                                             

                    <div class="form-group">                                                                                                                         

                                                                              

                     <label for="inputExperience" class="col-sm-3 control-label">Disponibilidad para cambiar de residencia</label>



                    <div class="box-body">

                     <div class="row">

                     

                  <div class="checkbox col-sm-5">

                    
                    <select required name="cambiodpt" class="form-control select2" style="width: 100%;" data-placeholder="Situación actual">

                  <option><?php echo $cambio; ?></option>

                  <option>Si</option>

                  <option>No</option>

                
                </select>

                  </div>

                    </div>

                    </div>   

						</div>

                                                                                                   

                    <input name="IDCandidato" type="text" value="<?php echo $fotoEmail ?>" class="hide">                                                                                                                                                                                                                                             

					<div class="box-footer">

                  <button name="PrefTrabajo" type="submit" class="btn btn-info pull-right">ACTUALIZAR</button>

              	  </div>                                                                                                                             

                   </form>                 

                                                      

                </div>

                </div>  

               

              </div>

              <!-- /.tab-pane -->

              

              

              <!-- /.tab-pane -->

            </div>

            <!-- /.tab-content -->

          </div>

          <!-- /.nav-tabs-custom -->

            </div>

            <!-- /.box-body -->

          </div>

          <!-- /.box -->

      

         

         

         

          

          

          

          

          

          

        </div>

        

<!-------------------------------------------------------------------------------------------------------------------------------------------------------------- /.col -->

      

      <!-- /.row -->



   		

        </div>



