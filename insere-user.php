<?php 

include('conexao.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];


$stmt = $con->prepare("INSERT INTO usuario(usuario, senha, nome, email) VALUES (?,?,?,?)");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$senha);
$stmt->bindParam(3,$nome);
$stmt->bindParam(4,$email);
$stmt->execute();

header('Location: form-login.php');