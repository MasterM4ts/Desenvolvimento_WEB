<?php

include("conect.php");
session_start( );


if (empty ($_POST["nome"]) || empty ($_POST["senha"])){
    header ("location: index.php");
    exit();
    } 
    
?>