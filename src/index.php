
<?php

//conexao banco de dados

include('../sql/db_conexao.php');

$id = 9;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='vinicius',sobrenome='do nascimento almeida' WHERE nome='Adriana' AND sobrenome='Garcia'");

if($sql->execute()){

    echo 'Meu cliente foi atualizado com sucesso!';
}

?>