<?php

include('../sql/db_conexao.php');

$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN `cargo` ON `clientes`.`cargo` = `cargos`.`id`");
$sql->execute();
$clientes = $sql->fetchAll();
foreach($clientes as $key => $value){
    echo $value['nome'];
    echo '|';
    echo $value['nome_cargo'];
    echo '<hr>';
}
?>