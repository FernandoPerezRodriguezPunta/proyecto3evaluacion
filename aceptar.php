<?php

session_start();



    setcookie("aceptar", true, time()+60*60);
    header("Location:index.php");



?>