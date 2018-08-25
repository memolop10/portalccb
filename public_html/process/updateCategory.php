<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$codeOldCatUp=$_POST['categ-code-old'];
$codeCatUp=$_POST['categ-code'];
$nameCatUp=$_POST['categ-name'];
$descCatUp=$_POST['categ-descrip'];

if(consultasSQL::UpdateSQL("categoria", "CodigoCat='$codeCatUp',Nombre='$nameCatUp',Descripcion='$descCatUp'", "CodigoCat='$codeOldCatUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center"> ';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=configAdmin.php\">";
}

