<?php 

include("conexao.php");
session_start();
unset($_SESSION['nome']);
unset($_SESSION['id_usuario']);

header('Location: form-login.php'); 