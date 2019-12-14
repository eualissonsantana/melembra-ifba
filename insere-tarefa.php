<?php include("conexao.php"); 
    
    session_start();

    // =========== Recuperando dados ==========================
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    $fk_categoria = $_POST["fk_categoria"];
    $fk_usuario = $_SESSION['id_usuario'];
    
    
    $stmt = $con->prepare("INSERT INTO tarefas(titulo, descricao, dia, hora, fk_categoria, fk_usuario) VALUES (?,?,?,?,?,?)");
    $stmt->bindParam(1,$titulo);
    $stmt->bindParam(2,$descricao);
    $stmt->bindParam(3,$dia);
    $stmt->bindParam(4,$hora);
    $stmt->bindParam(5,$fk_categoria);
    $stmt->bindParam(6,$fk_usuario);
    $stmt->execute();
      
?>

<html>
    <body>
        <script>
            location.href='./kamban.php';
        </script>
    </body>
</html>
    
   