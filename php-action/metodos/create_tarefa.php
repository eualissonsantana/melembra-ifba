<?php

require_once('../db_connect.php');

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO tarefas (titulo, descricao) VALUES ('$titulo, $descricao')";

if($link->query($sql) === TRUE):
    echo "deu certo";
else:
    echo "deu errado";
endif;

$link->close();

