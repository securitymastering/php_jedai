<?php

include('../sql/db_conexao.php');

$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` ORDER BY nome ASC LIMIT 2");
$sql->execute();
$clientes = $sql->fetchAll();
foreach($clientes as $key => $value){
    echo $value['nome'];
    echo '<hr>';
}
?>