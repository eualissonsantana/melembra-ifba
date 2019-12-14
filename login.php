<?php 
include('conexao.php');
session_start();

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "select * from usuario where email = :email and senha= :senha";

$resultado = $con->prepare($query);


$email = ($_POST["email"]);
$senha = ($_POST["senha"]);

$resultado->bindValue(":email",$email);
$resultado->bindValue(":senha",$senha);

$resultado->execute();

$select = $con->query("select * from usuario where email = '$email' and senha = '$senha'");

foreach($select as $user){
    $nome = $user['nome'];
    $id_usuario = $user['id_usuario']; 
}


$rows = $resultado->rowCount();

if($rows != 0){
    $_SESSION['nome'] = $nome;
    $_SESSION['id_usuario'] = $id_usuario;
    header('Location: kamban.php');
    exit();
}else {
    header('Location: form-login.php');
}