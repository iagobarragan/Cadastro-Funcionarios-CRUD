<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $cargo = $_POST["cargo"];

        $sql = "INSERT INTO funcionarios (nome, sobrenome, telefone, cargo) VALUES ('{$nome}', '{$sobrenome}', '{$telefone}', '{$cargo}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Funcionário cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $telefone = $_POST["telefone"];
        $cargo = $_POST["cargo"];

        $sql = "UPDATE funcionarios SET
                    nome='{$nome}',
                    sobrenome='{$sobrenome}',
                    telefone='{$telefone}',
                    cargo='{$cargo}'
                WHERE
                    id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Alteração feita com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível alterar!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'deletar':
        $sql = "DELETE FROM funcionarios WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Exclusão feita com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
}
