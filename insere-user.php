<?php 

include('conexao.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$imagem = $_FILES['foto'];
$nome_imagem = $_FILES['foto']['name'];

$stmt = $con->prepare("INSERT INTO usuario(usuario, senha, nome, email, imagem) VALUES (?,?,?,?,?)");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$senha);
$stmt->bindParam(3,$nome);
$stmt->bindParam(4,$email);
$stmt->bindParam(5,$nome_imagem);
$stmt->execute();

$ultimo_id = $con->lastInsertId();
$_UP['pasta'] = 'img/users/' . $ultimo_id.'/';

mkdir($_UP['pasta'], 0777);

if(move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta'].$nome_imagem)){
    echo "Imagem salva com sucesso";
}


header('Location: form-login.php');