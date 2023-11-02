<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Não há usuário logado!<a href=\"login.php\">Entrar</a>");

}

?>