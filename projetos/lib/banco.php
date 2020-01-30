<?php

$conexao = mysqli_connect($config['database']['host'],
    $config['database']['user'], $config['database']['pass'],
    $config['database']['db']);

if (mysqli_connect_errno()) {
    print("ERRO ao comecar o banco de dados!<br>");
    print(mysqli_connect_error());
    die();
}