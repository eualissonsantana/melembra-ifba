<?php 
include('topo.php');

$id_categoria = $_GET["id_categoria"];

?>

<body>
    <div class="edita-tarefa">
        <section class="container col-5 form">
        <?php
            $resultado = $con->query("SELECT * FROM categorias WHERE id_categoria = '$id_categoria'");
            
            foreach($resultado as $post){
        ?>
        
        <form action="altera-categoria.php" method="POST">
            <input type="hidden" name="id_categoria" value="<?php echo $id_categoria?>"/>
            <div class="form-group">
                <label for="name">Descricao</label>
                <input type="titulo" name="descricao" class="form-control" id="descricao-categoria" placeholder="<?php echo $post['descricao']?>">
            </div>
            <?php }?>
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        </section>
    </div>
</body>