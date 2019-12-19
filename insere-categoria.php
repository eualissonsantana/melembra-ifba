<?php include("conexao.php"); 
	
    // =========== Recuperando dados ==========================
    if(!empty($_POST["descricao"])){
        $descricao = $_POST["descricao"];
        
        $stmt = $con->prepare("INSERT INTO categorias(descricao) VALUES (?)");
        $stmt->bindParam(1,$descricao);
        $stmt->execute();
    }
    
    
?>

<html>
    <body>
        <script>
            location.href='./kamban.php';
        </script>
    </body>
</html>