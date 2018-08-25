<?php
session_start();
	/* Connect To Database*/

	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos

	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos


	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

	if($action == 'ajax'){

		// escaping, additionally removing everything that could be (html/javascript-) code

         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
         $qq = mysqli_real_escape_string($con,(strip_tags($_REQUEST['qq'], ENT_QUOTES)));

		 $aColumns = array('AreaPT', 'PuestoPT', 'SalarioMPT');//Columnas de busqueda
		

		 $sTable = "candidatos";

		 $sWhere = "";		
		
if ( $_GET['qq'] != "" )	
		{
			$sWhere2=$_GET['q'];
			$sWhere = "WHERE (";

			for ( $i=0 ; $i<count($aColumns) ; $i++ )

			{

				$sWhere .= $aColumns[$i]." LIKE '%".$qq."%' OR ";

			}

			$sWhere = substr_replace( $sWhere, "", -3 );

			$sWhere .= ')';
			
			
			include 'pagination2.php'; //include pagination file

		//pagination variables

		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

		$per_page = 3; //how much records you want to show

		$adjacents  = 4; //gap between pages after number of adjacents

		$offset = ($page - 1) * $per_page;

		//Count the total number of row in your table*/

		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere AND AreaPT='$sWhere2' ");

		$row= mysqli_fetch_array($count_query);

		$numrows = $row['numrows'];

		$total_pages = ceil($numrows/$per_page);

		$reload = './index.php';

		//main query to fetch the data

		$sql="SELECT * FROM  $sTable $sWhere AND AreaPT='$sWhere2' LIMIT $offset,$per_page";

		$query = mysqli_query($con, $sql);

		//loop through fetched data

		if ($numrows>0){

			

			?>

			<div class="table-responsive no-border" style="background-color: #ecf0f5;">

			  <table class="table" style="background-color: #ecf0f5;">

				<tr>

					<th>Foto</th>

					<th>Formación</th>

					<th>Descripcion Profesional</th>
					
					<th>Salario Mensual</th>
					<th>&nbsp;</th>
				</tr>

				<?php

				while ($row=mysqli_fetch_array($query)){

					$foto=$row['Foto'];
					$id_Candidato=$row['ID'];
					$descripcion=$row['DescPP'];
					$salario=$row['SalarioMPT'];
					$puesto=$row['PuestoPT'];
					$area=$row['AreaPT'];
        $cargo=$row['CargoPP'];
					?>

					<tr>

						<td><span class="info-box-icon btn-bitbucket"><i class="">
						<img src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/<?php echo $foto; ?>" alt="" title="<?php echo $cargo; ?>"  style="max-height: 60px">
						</i></span></td>

						<td>
						<span class="info-box-text description-header text-light-blue">Puesto:&nbsp;&nbsp;<?php echo $puesto; ?></span>				
						<span class="info-box-text description-header">Area:&nbsp;&nbsp;<?php echo $area; ?></span>
						
						<span class="description-header">

				  <?php
				  $formacion = mysqli_query($con, "SELECT * FROM formacion WHERE IDCandidato='".$id_Candidato."' ");
					while($FormacioNP=mysqli_fetch_array($formacion)){
					$nivelP=$FormacioNP['NivelE'];
					$nivelC=$FormacioNP['IDCandidato'];
					$nivelEP=$FormacioNP['CentroE'];
					echo ' <i class="fa fa-university" title="'.$nivelEP.'&nbsp;&nbsp;'.$nivelP.'" style="cursor: pointer;"></i> ';
                    } 
					?>									
																		
						</span>																				
																																		
						</td>
											
						<td ><?php echo $descripcion; ?></td>
						
						<td ><?php echo $salario; ?></td>

						

						<td>
						
<div class="btn-group">
<i onclick="mifuncion('<?php echo $id_Candidato ?>')" class="fa fa-newspaper-o" title="Postular" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
					$candado = mysqli_query($con, "SELECT * FROM Postulados WHERE IDCandidato='".$id_Candidato."' AND OfertaPublicada='".$_SESSION['carpeta']."' ");
					$checarcandado=mysqli_fetch_array($candado);{
					$ok=$checarcandado['IDCandidato'];
					if ($id_Candidato !== $ok){ echo ' <i class="fa fa-unlock danger" title="Desbloqueado" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp; '; }
					else { echo ' <i onclick="mifuncion('.$id_Candidato.')" class="fa fa-lock success" title="Desbloquear" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp; '; }
                    } 
					?>
<i onClick="operacion_candidatos(this.value);document.getElementById('loaderCandidatos').style.display='block';" value="<?php echo $id_Candidato ?>" class="fa fa-external-link" title="Ver" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $id_Candidato; ?>ok
</div>
						
						
						</td>

					</tr>

					<?php

				}

				?>

				<tr>

					<td colspan=5><span class="pull-right"><?php

					 echo paginate($reload, $page, $total_pages, $adjacents);

					?></span></td>

				</tr>

			  </table>

			</div>

		
			<?php

		}

		
		exit();
		
		
		}
		
		
		
		if ( $_GET['q'] != "" && $_GET['qq'] == "" )	
		{

			$sWhere = "WHERE (";

			for ( $i=0 ; $i<count($aColumns) ; $i++ )

			{

				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";

			}

			$sWhere = substr_replace( $sWhere, "", -3 );

			$sWhere .= ')';
			
			
			include 'pagination2.php'; //include pagination file

		//pagination variables

		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

		$per_page = 3; //how much records you want to show

		$adjacents  = 4; //gap between pages after number of adjacents

		$offset = ($page - 1) * $per_page;

		//Count the total number of row in your table*/

		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere $sWhere2 ");

		$row= mysqli_fetch_array($count_query);

		$numrows = $row['numrows'];

		$total_pages = ceil($numrows/$per_page);

		$reload = './index.php';

		//main query to fetch the data

		$sql="SELECT * FROM  $sTable $sWhere $sWhere2 LIMIT $offset,$per_page";

		$query = mysqli_query($con, $sql);

		//loop through fetched data

		if ($numrows>0){

			?>

			<div class="table-responsive no-border" style="background-color: #ecf0f5;">

			  <table class="table" style="background-color: #ecf0f5;">

				<tr>

					<th>Foto</th>

					<th>Formación</th>

					<th>Descripcion Profesional</th>
					
					<th>Salario Mensual</th>
					<th>&nbsp;</th>
				</tr>

				<?php

				while ($row=mysqli_fetch_array($query)){

					$foto=$row['Foto'];
					$id_Candidato=$row['ID'];
					$descripcion=$row['DescPP'];
					$salario=$row['SalarioMPT'];
					$puesto=$row['PuestoPT'];
					$area=$row['AreaPT'];
        $cargo=$row['CargoPP'];
					?>

					<tr>

						<td><span class="info-box-icon btn-bitbucket"><i class="">
						<img src="https://empleosccb.com.mx/Candidatos/fotoscandidatos/<?php echo $foto; ?>" alt="" title="<?php echo $cargo; ?>"  style="max-height: 60px">
						</i></span></td>

						<td>
						<span class="info-box-text description-header text-light-blue">Puesto:&nbsp;&nbsp;<?php echo $puesto; ?></span>				
						<span class="info-box-text description-header">Area:&nbsp;&nbsp;<?php echo $area; ?></span>
						
						<span class="description-header">

				  <?php
				  $formacion = mysqli_query($con, "SELECT * FROM formacion WHERE IDCandidato='".$id_Candidato."' ");
					while($FormacioNP=mysqli_fetch_array($formacion)){
					$nivelP=$FormacioNP['NivelE'];
					$nivelC=$FormacioNP['IDCandidato'];
					$nivelEP=$FormacioNP['CentroE'];
					echo ' <i class="fa fa-university" title="'.$nivelEP.'&nbsp;&nbsp;'.$nivelP.'" style="cursor: pointer;"></i> ';
                    } 
					?>									
																		
						</span>																				
																																		
						</td>
											
						<td ><?php echo $descripcion; ?></td>
						
						<td ><?php echo $salario; ?></td>

						

						<td>
						
<div class="btn-group">
<i onclick="mifuncion('<?php echo $id_Candidato ?>')" class="fa fa-newspaper-o" title="Postular" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id_Candidato ?>
					<?php
					$candado = mysqli_query($con, "SELECT * FROM Postulados WHERE IDCandidato='".$id_Candidato."' AND OfertaPublicada='".$_SESSION['carpeta']."' ");
					while ($checarcandado=mysqli_fetch_array($candado)){
					$ok=$checarcandado['IDCandidato'];
					if ($id_Candidato = $ok){ echo ' <i class="fa fa-unlock danger" title="Desbloqueado" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;'.$ok.' '; }
					else { echo ' <i onclick="mifuncion('.$id_Candidato.')" class="fa fa-lock success" title="Desbloquear" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;'.$ok.' '; 
						 }
					
                    } 
					?>
<a><i onClick="operacion_candidatos(<?php echo $id_Candidato ?>);document.getElementById('loaderCandidatos').style.display='block';" class="fa fa-external-link" title="Ver" style="cursor: pointer;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
okok <?php echo $_SESSION['carpeta'] ?>
</div>
						
						
						</td>

					</tr>

					<?php

				}

				?>

				<tr>

					<td colspan=5><span class="pull-right"><?php

					 echo paginate($reload, $page, $total_pages, $adjacents);

					?></span></td>

				</tr>
					<tr>

					<td colspan=5><span class="pull-right"><p  id="loaderCandidatos" style="display:none;"></p><!-- Carga gif animado -->
</span></td>

				</tr>

			  </table>

			</div>

			<?php

		}

		
		
		
		
		}
		
	
		
	}

?>		



