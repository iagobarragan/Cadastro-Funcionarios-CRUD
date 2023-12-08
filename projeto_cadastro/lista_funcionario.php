<h1>Listar funcionários</h1>
<?php
$sql = "SELECT * FROM funcionarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped-columns'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Sobrenome</th>";
    print "<th>Telefone</th>";
    print "<th>Cargo</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->sobrenome . "</td>";
        print "<td>" . $row->telefone . "</td>";
        print "<td>" . $row->cargo . "</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
                
                <button onclick=\"if(confirm('Esta ação irá excluir o funcionário da lista. Tem certeza disso?')){location.href='?page=salvar&acao=deletar&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Deletar</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não foram encontrados resultados!</p>";
}

?>