<?php include("conexao.php"); 
	
    // =========== Recuperando dados ==========================
    $descricao = $_POST["descricao"];
    $id_categoria = $_POST["id_categoria"];
    
    
    $stmt = $con->prepare("UPDATE categorias SET descricao=? WHERE id_categoria =?");
    $stmt->bindParam(1,$descricao);
    $stmt->bindParam(1,$id_categoria);
    $stmt->execute();
    
?>