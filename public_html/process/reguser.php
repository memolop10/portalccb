<?php



include '../library/configServer.php';



include '../library/consulSQL.php';



sleep(3);



$nameCliente= $_POST['user-name'];



$passCliente= md5($_POST['user-pass']);



$emailCliente= $_POST['user-email'];







if(!$nameCliente=="" && !$passCliente=="" && !$emailCliente==""){



    $verificar=  ejecutarSQL::consultar("select * from candidatos where Email='".$emailCliente."'");



    $verificaltotal = mysql_num_rows($verificar);



    if($verificaltotal<=0){



        if(consultasSQL::InsertSQL("candidatos", "Nombre, Password, Email", "'$nameCliente','$passCliente','$emailCliente'")){



        echo '<script> location.href="https://empleosccb.com.mx/Candidatos/"; </script>';



        }else{



//           echo 'Ha ocurrido un error.<br>Por favor intente nuevamente'; 



        }



    }else{



        echo 'El Usuario ya esta registrado.<br>Por favor revise su información';



    }



}else {



    echo 'Error los campos no deben de estar vacíos';



}



