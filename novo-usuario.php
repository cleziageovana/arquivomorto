<?php
require_once "config.php";

if (count($_POST) > 0){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST['senha'];
    $usuario = $_POST['usuario'];

    $sql = "INSERT INTO usuarios SET nome = :nome, sobrenome = :sobrenome, senha = :senha, data_criacao = NOW(), usuario = :usuario";

    $sql = $db->prepare($sql);
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":sobrenome", $sobrenome);
    $sql->bindValue(":senha", $senha);
    $sql->bindValue(":usuario", $usuario);
    $sql->execute();
    //print_r($sql->errorInfo());exit;
    if($sql) {
        header("Location: index.php");
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css"/>
</head>
<body>
<div class="container fundo">
    <div class="fundo-menu">

        <a href="novo-usuario.php" >
            <div class="botao-menu">
                <img src="./imagens/Adicionar + Preto Grosso.svg" src=""/>
            </div>
        </a>

        <a href="#" >
            <div class="botao-menu">
                <img src="./imagens/Pesquisa.svg" src=""/>
            </div>
        </a>

        <a href="#" >
            <div class="botao-menu">
                <img src="./imagens/Arquivo.svg" src=""/>
            </div>
        </a>
    </div>

    <div class="fundo-conteudo">
        
    <div class="container">
        <fieldset>
            <legend>Cadastrar Usuario</legend>
            <form method="POST">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome"/>
                <label>Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome"/>
                <label>Usuario</label>
                <input type="text" class="form-control" name="usuario"/>
                <label>Senha</label>
                <input type="password" class="form-control" name="senha"/>
                <br/><a href="index.php" class="btn btn-warning">Voltar</a>
                <button type="submit" class="btn btn-primary"> salvar</button>
            </form>
        </fieldset>
    </div>
</div>
</div>


</body>
</html>