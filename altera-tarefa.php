<?php include("conexao.php"); 
	
    // =========== Recuperando dados ==========================
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $dia = $_POST["dia"];
    $hora = $_POST["hora"];
    $fk_categoria = $_POST["fk_categoria"];
    $fk_quadro = $_POST["fk_quadro"];
    $id_tarefa = $_POST["id_tarefa"];
    
    
    $stmt = $con->prepare("UPDATE tarefas SET titulo=?, descricao=?, dia=?, hora=?, fk_categoria=?, fk_quadro=? WHERE id_categoria = ?");
    $stmt->bindParam(1,$titulo);
    $stmt->bindParam(2,$descricao);
    $stmt->bindParam(3,$dia);
    $stmt->bindParam(4,$hora);
    $stmt->bindParam(5,$fk_categoria);
    $stmt->bindParam(6,$fk_quadro);
    $stmt->bindParam(7,$id_categoria);
    $stmt->execute();
      
?>
    
   