<?php

include '../library/configServer.php';

include '../library/consulSQL.php';

sleep(3);

$nameCliente= $_POST['clien-name'];

$passCliente= md5($_POST['clien-pass']);

$emailCliente= $_POST['clien-email'];



if(!$nameCliente=="" && !$passCliente=="" && !$emailCliente==""){

    $verificar=  ejecutarSQL::consultar("select * from empresas where Email='".$emailCliente."'");

    $verificaltotal = mysql_num_rows($verificar);

    if($verificaltotal<=0){

        if(consultasSQL::InsertSQL("empresas", "Nombre, Password, Email", "'$nameCliente','$passCliente','$emailCliente'")){

 //          echo '<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/Empleos/Empresas/Perfil.php\">';

        }else{

//           echo 'Ha ocurrido un error.<br>Por favor intente nuevamente'; 

        }

    }else{

        echo 'El Usuario ya esta registrado.<br>Por favor revise su información';

    }

}else {

    echo 'Error los campos no deben de estar vacíos';

}

?>
<?php echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://localhost/Empleos/Empresas/Perfil.php\">"; ?>
