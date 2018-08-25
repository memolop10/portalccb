<?php
 include '../library/configServer.php';
 include '../library/consulSQL.php';

 sleep(4);
 
 $codeProd= $_POST['prod-code'];
 $cons=  ejecutarSQL::consultar("select * from productos where id_producto='$codeProd'");
 $totalproductos = mysql_num_rows($cons);
 $tmp=  mysql_fetch_array($cons);

 if($totalproductos>0){
    if(consultasSQL::DeleteSQL('productos', "id_producto='".$codeProd."'")){
       
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">El producto se elimino de la tienda con éxito</p>';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
    }else{
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>';
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
    }
 }else{
     echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código del producto no existe</p>';
	 echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
 }