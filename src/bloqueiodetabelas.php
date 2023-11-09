<?php
/*
include('../sql/db_conexao.php');


$pdo->prepare("SELECT * FROM `tb_admin.usuarios`");

$sql->execute();

$usuarios = $sql->fetchAll();
foreach($usuarios as $key => $value){
    echo $value['nome'];
    echo '<hr>';
}
*/

include('../sql/db_conexao.php');


$pdo->exec("LOCK TABLES `tb_admin.usuarios` WRITE ");


sleep(10);

?>