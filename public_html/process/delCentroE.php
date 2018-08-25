<?php

session_start();

include '../library/configServer.php';

include '../library/consulSQL.php';

sleep(1);

$delCentroE= $_POST['ExpProfID'];

$consP=  ejecutarSQL::consultar("select * from formacion where ID='$delCentroE'");

$totalP= mysql_num_rows($consP);



if($totalP>0){

    if(consultasSQL::DeleteSQL('formacion', "ID='".$delCentroE."'")){
        
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    }else{

       echo '<br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>';
		sleep(3);

	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    }

}else{

    echo '<br><p class="lead text-center">La empresa ya no existe</p>';
	
	sleep(3);

	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

}

