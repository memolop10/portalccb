<?php

session_start();

include '../library/configServer.php';

include '../library/consulSQL.php';

sleep(1);

$delPerfProff= $_POST['pProfID'];

$consP=  ejecutarSQL::consultar("select * from perfil_prof where ID='$delPerfProff'");

$totalP= mysql_num_rows($consP);



if($totalP>0){

    if(consultasSQL::DeleteSQL('perfil_prof', "ID='".$delPerfProff."'")){
        
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    }else{

       echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>';
		sleep(3);

	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    }

}else{

    echo '<br><p class="lead text-center">El perfil ya no existe</p>';
	
	sleep(3);

	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

}

