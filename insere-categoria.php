<?php include("conexao.php"); 
	
    // =========== Recuperando dados ==========================
    $descricao = $_POST["descricao"];
    
    
    $stmt = $con->prepare("INSERT INTO categorias(descricao) VALUES (?)");
    $stmt->bindParam(1,$descricao);
    $stmt->execute();
    
?>

<html>
    <body>
        <script>
            location.href='./index.php';
        </script>
    </body>
</html>