<?php
/*-------------------------
Autor: Obed Ramos
Web: www.ipdesign.com.mx
Correo-E: admin@ipdesign.com.mx
---------------------------*/
session_start();

	/* Connect To Database*/



	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos



	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos





	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';



	if($action == 'ajax'){



		// escaping, additionally removing everything that could be (html/javascript-) code



         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));

         $qq = mysqli_real_escape_string($con,(strip_tags($_REQUEST['qq'], ENT_QUOTES)));



		 $aColumns = array('area', 'puesto', 'salario');//Columnas de busqueda

		



		 $sTable = "ofertas";



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



		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere AND area='$sWhere2' ");



		$row= mysqli_fetch_array($count_query);



		$numrows = $row['numrows'];



		$total_pages = ceil($numrows/$per_page);



		$reload = './index.php';



		//main query to fetch the data



		$sql="SELECT * FROM  $sTable $sWhere AND area='$sWhere2' LIMIT $offset,$per_page";



		$query = mysqli_query($con, $sql);



		//loop through fetched data



		if ($numrows>0){



			



			?>



			<div class="table-responsive no-border">



			  <table class="table">



				<tr>



					<th>&nbsp;&nbsp;</th>



					<th>&nbsp;&nbsp;</th>



					<th align="left" style="max-height: 100px; max-width: 500px;">&nbsp;&nbsp;</th>

					

					<th align="center"> <div style="color: #F0F0F0;">Salario Mensual</div></th>

					<th>&nbsp;</th>

				</tr>



				<?php



				while ($row=mysqli_fetch_array($query)){



					$foto=$row['Foto'];

					$id_Candidato=$row['ID'];

					$descripcion=$row['descripcionOf'];

					$salario=$row['salario'];

					$puesto=$row['puesto'];

					$area=$row['area'];

					$fecha=$row['fecha_publicacion'];

					?>



					<tr style="background-color: rgba(236,240,245,0.90);">



						<td><span class="info-box-icon btn-bitbucket"><i class="">

						<img src="https://empleosccb.com.mx/Empresas/Avisos/Foto/<?php echo $foto; ?>" alt="" title="<?php echo $cargo; ?>"  style="max-height: 80px; max-width: 80px;">

						</i></span></td>



						<td>

						<span class="info-box-text description-header text-light-blue">Puesto:&nbsp;&nbsp;<?php echo $puesto; ?></span>				

						<span class="info-box-text description-header">Area:&nbsp;&nbsp;<?php echo $area; ?></span>

						<span class="info-box-text description-header"><?php echo $fecha; ?></span>

																									

																																		

						</td>

											

						<td ><div style="max-height: 60px; overflow-y: hidden;"><?php echo $descripcion; ?></div><?php echo $descripcion; ?></td>

						

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



			<div class="table-responsive no-border">



			  <table class="table">



				<tr>



					<th>&nbsp;&nbsp;</th>



					<th>&nbsp;&nbsp;</th>



					<th width="450px">&nbsp;&nbsp;</th>

					

					<th align="center"><div style="color: #F0F0F0;">Salario Mensual</div></th>

					<th>&nbsp;</th>

				</tr>



				<?php



				while ($row=mysqli_fetch_array($query)){



					$foto=$row['Foto'];

					$id_Candidato=$row['ID'];

					$descripcion=$row['descripcionOf'];

					$salario=$row['salario'];

					$puesto=$row['puesto'];

					$area=$row['area'];

					$fecha=$row['fecha_publicacion'];

					?>



					<tr style="background-color: rgba(236,240,245,0.90);">



						<td><span class="info-box-icon btn-bitbucket"><i class="">

						<img src="https://empleosccb.com.mx/Empresas/Avisos/Foto/<?php echo $foto; ?>" alt="" title="<?php echo $cargo; ?>"  style="max-height: 80px; max-width: 80px;">

						</i></span></td>



						<td>

						<span class="info-box-text description-header text-light-blue">Puesto:&nbsp;&nbsp;<?php echo $puesto; ?></span>				

						<span class="info-box-text description-header">Area:&nbsp;&nbsp;<?php echo $area; ?></span>

						<span class="info-box-text description-header"><?php echo $fecha; ?></span>

						

						<span class="description-header">



				 									

																		

						</span>																				

																																		

						</td>

											

						<td align="left"><div style="max-height: 60px; overflow-y: hidden;"><?php echo $descripcion; ?></div></td>

						

						<td align="center"><?php echo $salario; ?></td>



						



						<td>

						

<div class="btn-group">

<i onclick="mifuncion('<?php echo $id_Candidato ?>')" class="fa fa-newspaper-o" data-toggle="tooltip" title="Postular" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id_Candidato ?>

					<?php

					$candado = mysqli_query($con, "SELECT * FROM Postulados WHERE IDCandidato='".$id_Candidato."' AND OfertaPublicada='".$_SESSION['carpeta']."' ");

					while ($checarcandado=mysqli_fetch_array($candado)){

					$ok=$checarcandado['IDCandidato'];

					if ($id_Candidato = $ok){ echo ' <i class="fa fa-unlock danger" title="Desbloqueado" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;'.$ok.' '; }

					else { echo ' <i onclick="mifuncion('.$id_Candidato.')" class="fa fa-lock success" title="Desbloquear" style="cursor: pointer;"></i>&nbsp;&nbsp;&nbsp;&nbsp;'.$ok.' '; 

						 }

					

                    } 

					?>

<a><i onClick="operacion_candidatos(<?php echo $id_Candidato ?>);document.getElementById('loaderCandidatos').style.display='block';" class="fa fa-external-link" data-toggle="tooltip" title="Ver" style="cursor: pointer;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

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







