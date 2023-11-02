<?php

$title = "Sistema de Gestão da Igreja";


$host = "localhost";
$user = "root";
$pass = "";
$base = "igreja";



//ESTABELECENDO A CONEXÃO COM O BANCO DE DADOS
define('HOST',$host);
define('USER',$user);
define('PASS',$pass);
define('BASE',$base);

$conn = new MySQLi(HOST,USER,PASS,BASE);

try {
    $conn = new MySQLi(HOST,USER,PASS,BASE);
    }
    catch (Exception $e) {
        echo "ERRO ao conectar com banco!";
    }
?>