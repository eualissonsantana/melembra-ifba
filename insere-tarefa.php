<?php include("conexao.php"); 
    
    session_start();

    // =========== Recuperando dados ==========================
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $data = str_replace("/", "-", $_POST["dia"]);
    $dia = date('Y-m-d', strtotime($data));
    $hora = $_POST["hora"];
    $fk_categoria = $_POST["fk_categoria"];
    $fk_usuario = $_SESSION['id_usuario'];

    if(!isset($_POST["etapa"])){
        $etapa = "agendado";
    }else {
        $etapa = $_POST["etapa"];
    }
    
    
    $stmt = $con->prepare("INSERT INTO tarefas(titulo, descricao, dia, hora, etapa, fk_categoria, fk_usuario) VALUES (?,?,?,?,?,?,?)");
    $stmt->bindParam(1,$titulo);
    $stmt->bindParam(2,$descricao);
    $stmt->bindParam(3,$dia);
    $stmt->bindParam(4,$hora);
    $stmt->bindParam(5,$etapa);
    $stmt->bindParam(6,$fk_categoria);
    $stmt->bindParam(7,$fk_usuario);
    $stmt->execute();
      
?>

<html>
    <body>
        <script>
            location.href='./kamban.php';
        </script>
    </body>
</html>
    
   