<h1>Cadastrar funcionário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control">
    </div>

    <div class="mb-3">
        <label>Cargo</label>
        <input type="text" name="cargo" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>