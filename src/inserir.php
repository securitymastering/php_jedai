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
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$profissao = $_POST['profissao'];

$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?,?,?,?,?,?)");
$sql->execute(array($nome,$sobrenome,$momento_registro,$email,$endereco,$cep,$telefone,$profissao));

echo 'Cliente inserido com sucesso';
}else{
    echo 'Falha no Envio de Dados!';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inserir.css">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <div>
    <form class="form_style" action="" method="post" required>
        <div><h1>CADASTRO DE CLIENTES</h1></div>
        <div>
        <input class="inserir_input" type="text" name="nome" placeholder="Digite seu Nome!" required onfocus="onInputFocus(this)">
        <input class="inserir_input" type="text" name="sobrenome" placeholder="Digite seu sobrenome!" required onfocus="onInputFocus(this)">
        <input class="inserir_input" type="text" name="email" placeholder="Digite seu Email!" required onfocus="onInputFocus(this)">
        <input class="inserir_input" type="text" name="endereco" placeholder="Digite seu Endereço!" required onfocus="onInputFocus(this)">
        <input class="inserir_input" type="number" name="cep" placeholder="Digite seu cep!" required onfocus="onInputFocus(this)">
        <input class="inserir_input" type="number" name="telefone" placeholder="Digite seu telefone!" required onfocus="onInputFocus(this)">
        <input class="inserir_input" type="text" name="profissao" placeholder="Digite sua Profissão!" required onfocus="onInputFocus(this)">
        </div>
        
        <div><input class="inserir_button" type="submit" name="acao" value="Enviar!"></div>
        
    </form>
    </div>
    <script>



        function onInputFocus(input) {
        input.style.borderColor = "rgba(255,255,255,0)";
    }
    </script>
</body>
</html>



