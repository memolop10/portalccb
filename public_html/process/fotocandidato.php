<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

$correo=$_POST['Correo'];
$namef=$_FILES["fileToUpload"]["name"];
$namefoto="$correo$namef";

$target_dir = "../Candidatos/fotoscandidatos/$correo";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image




if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo "File is not an image.";

        $uploadOk = 0;

    }

}

// Check file size

if ($_FILES["fileToUpload"]["size"] > 500000) {

    echo "Lo siento, tu foto es demasiado grande.&nbsp;&nbsp;&nbsp;";
	sleep(3);
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {

    echo "Lo sentimos, solo se permiten fotos JPG, JPEG y PNG.&nbsp;&nbsp;&nbsp;";
	sleep(3);
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

    echo "Lo sentimos, tu foto no fue cargada.&nbsp;&nbsp;&nbsp;";
	sleep(3);
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
if(consultasSQL::UpdateSQL("candidatos", "Foto='$namefoto'", "Email='$correo'")){
    	
}

        echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";
		

    } else {

        echo "Lo sentimos, hubo un error al cargar su foto.&nbsp;&nbsp;&nbsp;";
		sleep(3);
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=https://empleosccb.com.mx/Candidatos\">";

    }

}

?>