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

		 $aColumns = array('ID', 'AreaPT', 'Nombre');//Columnas de busqueda
		

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
			
			
			include 'pagination.php'; //include pagination file

		//pagination variables

		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

		$per_page = 5; //how much records you want to show

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

					<th>Código</th>

					<th>Producto</th>

					<th><span class="pull-right">Cant.</span></th>
					
					<th>Kg / Grs</th>
					<th>Kg / Grs</th>

					

				</tr>

				<?php

				while ($row=mysqli_fetch_array($query)){

					$id_producto=$row['ID'];

					$codigo_producto=$row['PuestoPT'];

					$nombre_producto=$row['Nombre'];

					$id_marca_producto=$row['AreaPT'];


					?>

					<tr>

						<td><span class="info-box-icon btn-bitbucket"><i class=""><?php echo $id_producto; ?></i></span></td>

						<td><?php echo $codigo_producto; ?></td>
											
						<td ><?php echo $nombre_producto; ?></td>
						
						<td ><?php echo $id_marca_producto; ?></td>

						

						<td ><span class="pull-right"><a href="#" onclick="agregar('<?php echo $id_producto ?>')"><i class="glyphicon glyphicon-plus"></i></a></span></td>

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
			
			
			include 'pagination.php'; //include pagination file

		//pagination variables

		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

		$per_page = 5; //how much records you want to show

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

					<th>Código</th>

					<th>Producto</th>

					<th><span class="pull-right">Cant.</span></th>
					
					<th>Kg / Grs</th>
					<th>Kg / Grs</th>

					

				</tr>

				<?php

				while ($row=mysqli_fetch_array($query)){

					$id_producto=$row['ID'];

					$codigo_producto=$row['PuestoPT'];

					$nombre_producto=$row['Nombre'];

					$id_marca_producto=$row['AreaPT'];


					?>

					<tr>

						<td><span class="info-box-icon btn-bitbucket"><i class=""><?php echo $id_producto; ?></i></span></td>

						<td><?php echo $codigo_producto; ?></td>
											
						<td ><?php echo $nombre_producto; ?></td>
						
						<td ><?php echo $id_marca_producto; ?></td>

						

						<td ><span class="pull-right"><a href="#" onclick="agregar('<?php echo $id_producto ?>')"><i class="glyphicon glyphicon-plus"></i></a></span></td>

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

		
		
		
		
		}
		

	
		
	}

?>