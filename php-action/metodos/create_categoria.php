<?php

require_once('../db_connect.php');

$descricao = $_POST['descricao'];

$sql = "INSERT INTO categorias (descricao) VALUES ('$descricao')";

if($link->query($sql) === TRUE):
    echo "deu certo";
else:
    echo "deu errado";
endif;

$link->close();

