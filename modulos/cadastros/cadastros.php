<?php
    include_once("../../scripts/conexao.php");
    include_once("../../scripts/variaveis.php");
    include_once("../../bootstrap.php");
    switch(@$_REQUEST["acao"]){
        case "visitante";
            $nome = $_POST["nome"];
            $sexo = $_POST["sexo"];
            $nascimento = $_POST["nascimento"];
            $estado_civil = $_POST["estado_civil"];

            $sql = "Insert into visitante (nome,sexo,nascimento,estado_civil)
                    values ('{$nome}','{$sexo}','{$nascimento}','{$estado_civil}')";
            $res = $conn -> query($sql);

            if($res==true){
                print "<script> alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=lista';</script>";
            } else {
                print "<script> alert('Ocorreu um erro!');</script>";
                print "<script>location.href='?page=lista';</script>";
            }
            break;

        case "código";
            break;

        case "código";
            break;
    }

?>