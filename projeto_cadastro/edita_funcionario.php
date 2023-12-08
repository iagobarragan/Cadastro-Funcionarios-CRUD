<h1>Editar funcionário</h1>
<?php
$sql = "SELECT * FROM funcionarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" value="<?php print $row->sobrenome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="cargo" value="<?php print $row->cargo; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>