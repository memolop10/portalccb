<?php

    session_start();

    include '../library/configServer.php';

    include '../library/consulSQL.php';

    sleep(0);

    $email=$_POST['email-login'];

    $clave=md5($_POST['clave-login']);

    $radio=$_POST['optionsRadios'];

    if(!$email==""&&!$clave==""){

        $verUser=ejecutarSQL::consultar("select * from candidatos where Email='$email' and Password='$clave'");

        $verAdmin=ejecutarSQL::consultar("select * from empresas where Email='$email' and Password='$clave'");

        if($radio=="option2"){

            $AdminC=mysql_num_rows($verAdmin);

            if($AdminC>0){

                $_SESSION['EmailEmpresa']=$email;

                $_SESSION['PasswordEmpresa']=$clave;

$publica=ejecutarSQL::consultar("
SELECT NumFactura
FROM Facturas
WHERE Email='".$_SESSION['EmailEmpresa']."'
");

while($publicaciones=mysql_fetch_assoc($publica)){				


$finalizo=ejecutarSQL::consultar("
SELECT *
FROM ofertas
WHERE Fecha_Terminacion <= CURDATE() AND NumFactura='".$publicaciones['NumFactura']."'
");
while($fechas=mysql_fetch_assoc($finalizo)){
if($fechas['Estatus']=="Activo"){
$status="Concluido";	
$fac=$fechas['NumFactura'];	
if(consultasSQL::UpdateSQL("ofertas", "Estatus='$status'", "NumFactura='$fac'"));
}
}
				
}
				
				echo '<script> location.href="https://empleosccb.com.mx/Empresas/Panel/"; </script>';
				

            }else{

              echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error nombre o contraseña invalido'; 

            }

        }

        if($radio=="option1"){

            $UserC=mysql_num_rows($verUser);

            if($UserC>0){

                $_SESSION['EmailCandidato']=$email;

                $_SESSION['PasswordCandidato']=$clave;

                echo '<script> location.href="https://empleosccb.com.mx/Candidatos/"; </script>';

            }else{

                echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error nombre o contraseña invalido';

            }

        }



    }else{

        echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error campo vacío<br>Intente nuevamente';

    }