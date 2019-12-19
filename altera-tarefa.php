<?php include("conexao.php"); 
    
    session_start();

    // =========== Recuperando dados ==========================
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $data = str_replace("/", "-", $_POST["dia"]);
    $dia = date('Y-m-d', strtotime($data));
    $hora = $_POST["hora"];
    $etapa = $_POST["etapa"];
    $fk_categoria = $_POST["fk_categoria"];
    $id_tarefa = $_POST["id_tarefa"];
   
    
    
    $stmt = $con->prepare("UPDATE tarefas SET titulo=?, descricao=?, dia=?, hora=?, fk_categoria=?, etapa=? WHERE id_tarefa = ?");
    $stmt->bindParam(1,$titulo);
    $stmt->bindParam(2,$descricao);
    $stmt->bindParam(3,$dia);
    $stmt->bindParam(4,$hora);
    $stmt->bindParam(5,$fk_categoria);
    $stmt->bindParam(6,$etapa);
    $stmt->bindParam(7,$id_tarefa);
    $stmt->execute();

    header('Location: kamban.php');
      
?>
    
   