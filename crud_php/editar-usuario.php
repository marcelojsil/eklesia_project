<h1>EDITAR USUÁRIO</h1>

<?php
$sql = "select * from usuarios where id=".$_REQUEST["id"];
$res = $conn -> query($sql);
$row = $res -> fetch_object();
?>

<form action="?page=salvar" method="POST">
    <!--este input hidden faz com que a ação seja oculta do usuário-->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?php print $row->nome ?>">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php print $row->email ?>">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required >
    </div>
    <div class="mb-3">
        <label>Nascimento</label>
        <input type="date" name="nascimento" class="form-control" value="<?php print $row->nascimento ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>