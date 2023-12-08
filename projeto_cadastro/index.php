<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de Funcionários</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Registro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Página inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=cadastrar">Cadastrar funcionário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Visualizar funcionário</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("conecta.php");
        switch (@$_REQUEST["page"]) {
          case "cadastrar":
            include("cadastra_funcionario.php");
            break;
          case "listar":
            include("lista_funcionario.php");
            break;
          case "salvar":
            include("salva_funcionario.php");
            break;
          case "editar":
            include("edita_funcionario.php");
            break;
          default:
            print "<h1>Esta é a tela de cadastro de funcionário</h1>";
        }
        ?>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>