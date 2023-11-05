<?php

date_default_timezone_set('America/Sao_Paulo');

//conexao com o banco de dados

include('../sql/db_conexao.php');

//INSERIR DADOS NO BANCO DE DADOS!!

//PREPARE PARA PREVINIR SQL INJECTION!

//VERIFICAÇÃO DE POST!

if(isset($_POST['acao'])){
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$momento_registro = date('Y-m-d H:i:s');

$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
$sql->execute(array($nome,$sobrenome,$momento_registro));

echo 'Cliente inserido com sucesso';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
        <input type="submit" name="acao" value="Enviar!">
    </form>
</body>
</html>



