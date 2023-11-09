
<?php

//conexao banco de dados

include('../sql/db_conexao.php');

$id = 9;

$sql = $pdo->prepare("UPDATE `clientes` SET nome='vinicius',sobrenome='do nascimento almeida' WHERE nome='Adriana' AND sobrenome='Garcia'");

if($sql->execute()){

    echo 'Meu cliente foi atualizado com sucesso!';
}

/*
SERVERNAME = ENDEREÇO DO SERVER "127.0.0.1"
DATABASE = DBNAME
ROOT = 
PASSWORD =

$coat = mysqli_connect($SERNAME,$DATABASE,$ROOT,$PASSWORD)

if($coat > 0 ){
    echo 'banco de dados conectado!'
}else{
    echo'error!warning danger'
}
*/

?>

