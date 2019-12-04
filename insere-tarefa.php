<?php include("conexao.php"); 
	
    // =========== Recuperando dados ==========================
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    $fk_categoria = $_POST["fk_categoria"];
    $fk_quadro = $_POST["fk_quadro"];
    
    
    $stmt = $con->prepare("INSERT INTO tarefas(titulo, descricao, dia, hora, fk_categoria, fk_quadro) VALUES (?,?,?,?,?,?)");
    $stmt->bindParam(1,$titulo);
    $stmt->bindParam(2,$descricao);
    $stmt->bindParam(3,$dia);
    $stmt->bindParam(4,$hora);
    $stmt->bindParam(5,$fk_categoria);
    $stmt->bindParam(6,$fk_quadro);
    $stmt->execute();
      
?>

<html>
    <body>
        <script>
            location.href='./index.php';
        </script>
    </body>
</html>
    
   