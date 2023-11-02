<?php
include("../config.php");

if(isset($_POST['email']) || isset($_POST['senha'])){
//VERIFICAR SE CAMPOS ESTÃO VAZIOS
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Fala na execução do SQL:" . $conn->error);
        $qtd = $sql_query->num_rows;

        // SE HOUVER 1 ID INICIAR SEÇÃO
        if($qtd == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            // VARIAVEIS NECESSÁRIAS NA SEÇÃO
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location:painel.php");

        } else {
            echo "E-mail ou senha incorreto!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <div class="input">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="input">
            <label>Senha</label>
            <input type="password" name="senha">
        </div>
        <div class="btn">
            <button type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>