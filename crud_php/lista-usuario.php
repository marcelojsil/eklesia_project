<h1>LISTA DE USUÁRIOS</h1>

<?php
$sql = "select * from usuarios";

$res = $conn -> query($sql);

$qtd = $res -> num_rows;

print "<table class='table table-hover table-striped table-bordered'>";
print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Mascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
while($row = $res->fetch_object()){
    print "<tr>";
    print "<td>".$row -> id."</td>";
    print "<td>".$row -> nome."</td>";
    print "<td>".$row -> email."</td>";
    print "<td>".$row -> nascimento."</td>";
    print "<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar</button>
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                                                            location.href='?page=salvar&acao=excluir&id=".$row->id."';
                                                        }else{false;}
                                                        \">Excluir</button>
        </td>";
    print "</tr>";
}
print "</table>";

?>