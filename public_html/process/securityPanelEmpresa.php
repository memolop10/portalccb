<?php

session_start();

error_reporting(E_PARSE);

if (!$_SESSION['EmailEmpresa'] == "") {
    
} else {

    header("Location: https://empleosccb.com.mx/Empresas/Registro/");

    exit();

}