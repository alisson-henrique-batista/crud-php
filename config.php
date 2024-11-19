<?php
// arquivo que guarda os dados de configuraçao
$db_name = 'teste';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

//ou só assim tbm, abaixo:
//$pdo = new PDO("mysql:dbname=livraria;host=localhost", "root", "");

// $sql = $pdo->query('SELECT * FROM livros');

// $livros = $sql->fetchAll();

// echo "Total: " . $sql->rowCount();

// echo'<pre>';
// print_r($livros);

