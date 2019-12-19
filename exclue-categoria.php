<?php include("conexao.php"); 
	
// =========== Recuperando dados ==========================
$id_categoria = $_GET["id_categoria"];


$stmt = $con->prepare("DELETE FROM categorias WHERE id_categoria=?");
$stmt->bindParam(1,$id_categoria );
$stmt->execute();



?>

<html>
<body>
     <script>
	 	location.href='./kamban.php';
     </script>
</body>
</html>