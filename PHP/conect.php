<?php

$host= "10.28.1.173";
$usuario = "suporte";
$senha = "suporte";
$bd = "MASTERBANK";


$con = mysqli_connect($host, $usuario, $senha, $bd);
//$con = new mysqli($host, $usuario, $senha, $bd);

if ($con -> connect_errno){
    echo "Falha na Conexão: (".$con->connect_errno.")".$con-> connect_error;
}
    echo $con->host_info . "\n";

?>