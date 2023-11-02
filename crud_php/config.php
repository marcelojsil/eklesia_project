<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','teste');

$conn = new MySQLi(HOST,USER,PASS,BASE);

try {
    $conn = new MySQLi(HOST,USER,PASS,BASE);
    }
    catch (Exception $e) {
        echo "ERRO ao conectar com banco!";
    }

?>