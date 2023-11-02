<?php
    include_once("config.php");
    switch(@$_REQUEST["acao"]){
        case "cadastrar";
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $nascimento = $_POST["nascimento"];

            $sql = "Insert into usuarios (nome,email,senha,nascimento)
                    values ('{$nome}','{$email}','{$senha}','{$nascimento}')";
            $res = $conn -> query($sql);

            if($res==true){
                print "<script> alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=lista';</script>";
            } else {
                print "<script> alert('Ocorreu um erro!');</script>";
                print "<script>location.href='?page=lista';</script>";
            }
            break;

        case "editar";
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $nascimento = $_POST["nascimento"];

            $sql = "update usuarios set 
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}',
                        nascimento='{$nascimento}'
                    WHERE
                        id=".$_REQUEST["id"].";
                    ";
            $res = $conn -> query($sql);

            if($res==true){
                print "<script> alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=lista';</script>";
            } else {
                print "<script> alert('Ocorreu um erro!');</script>";
                print "<script>location.href='?page=lista';</script>";
            }
            break;

        case "excluir";
            
            $sql = "delete from usuarios where id=".$_REQUEST["id"]."";
            $res = $conn -> query($sql);

            if($res==true){
                print "<script> alert('Excluido com sucesso!');</script>";
                print "<script>location.href='?page=lista';</script>";
            } else {
                print "<script> alert('Ocorreu um erro!');</script>";
                print "<script>location.href='?page=lista';</script>";
            }


            break;
    }

?>