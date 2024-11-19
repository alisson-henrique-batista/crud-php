<?php


require 'config.php'; //ele precisa acessar o banco de dados

// arquivo que adiciona novos usuarios

// pegar os items
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// verificar se os items estao certo
if ($id && $name && $email) {
    //fazendo a auteração dos valores
    // UPDATE usuarios SET name = '...', email = '...' WHERE id = '...'
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
    $sql->bindValue(':name', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;

} else {
    header("Location: adicionar.php");
    exit;
}