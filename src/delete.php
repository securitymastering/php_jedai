<?php

//conexao banco de dados

include('../sql/db_conexao.php');

$id = 9;

$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

if($sql->execute(array($id))){

    echo 'Meu cliente foi deletado com sucesso!';
}

?>