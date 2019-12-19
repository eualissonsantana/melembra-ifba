<?php include("conexao.php"); 
	
// =========== Recuperando dados ==========================
$id_tarefa = $_GET["id_tarefa"];


$stmt = $con->prepare("DELETE FROM tarefas WHERE id_tarefa=?");
$stmt->bindParam(1,$id_tarefa);
$stmt->execute();



?>

<html>
<body>
     <script>
	 	location.href='./kamban.php';
     </script>
</body>
</html>