<h1>NOVO VISITANTE</h1>

<form action="?page=salvar" method="POST">
    <!--este input hidden faz com que a ação seja oculta do usuário-->
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <input type="sexo" name="sexo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="nascimento" name="nascimento" class="form-control">
    </div>
    <div class="mb-3">
        <label>Estado Civil</label>
        <input type="estado_civil" name="estado_civil" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>