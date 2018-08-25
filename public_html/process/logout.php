<?php
session_start(); 
session_unset();
session_destroy();
header("Location: https://empleosccb.com.mx"); 
?>