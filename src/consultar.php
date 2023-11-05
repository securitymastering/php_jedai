<?php

//conexao banco de dados

include('../sql/db_conexao.php');

/*
$sql = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id= ? ");

$sql->execute(array($_GET['categoria_id']));

$info = $sql->fetchAll();

foreach ($info as $key => $value){
    echo'Titulo:'.$value['titulo'];
    echo '<br/>';
    echo 'Noticias:'.$value['conteudo'];
    echo '<hr>';
}


$sql = $pdo->prepare("SELECT * FROM `categoria`");

$sql->execute();

$info = $sql->fetchAll();

foreach ($info as $key => $value){
    $categoria_id = $value['id'];
    echo 'Exibindo posts de:'.$value['nome'];
    echo '<br/>';
    $sql = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id= $categoria_id ");
    $sql->execute();
    $infoPosts = $sql->fetchAll();
    foreach ($infoPosts as $key => $value){
        echo'Titulo:'.$value['titulo'];
        echo '<br/>';
        echo 'Noticias:'.$value['conteudo'];
        echo '<hr>';
    }
}*/

$sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id`=`categoria`.`id`");
$sql->execute();
$info = $sql->fetchAll(PDO::FETCH_ASSOC);


    echo'<pre>';
    print_r ($info);
    echo '</pre>';



?>