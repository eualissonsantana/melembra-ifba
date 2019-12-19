<?php 
include('topo.php');

$id_tarefa = $_GET["id_tarefa"];

?>

<body>
    <div class="edita-tarefa">
        <section class="container col-5 form">
        <?php
            $resultado = $con->query("SELECT * FROM tarefas WHERE id_tarefa = '$id_tarefa'");
            
            foreach($resultado as $post){
        ?>
        
        <form action="altera-tarefa.php" method="POST">
            <input type="hidden" name="id_tarefa" value="<?php echo $id_tarefa?>"/>
            <div class="form-group">
                <label for="name">Título</label>
                <input type="titulo" name="titulo" class="form-control" id="titulo-tarefa" placeholder="<?php echo $post['titulo']?>">
            </div>
            <?php }?>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea type="descricao" name="descricao" class="form-control" id="descricao" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="name">Categoria</label>
                    <select name="fk_categoria" class="form-control">
                    <?php
                        $resultado = $con->query("SELECT * FROM categorias");

                        foreach($resultado as $linha){
                    ?>	
                            <option value="<?php echo $linha["id_categoria"];?>" ><?php 	echo $linha["descricao"] ?></option>
                    <?php
                    }
                    ?>
                    </select>   
                </div>
                <div class="col">
                    <label for="data">Data</label>
                    <div class="input-group date">
                        <input type="text" name="dia" class="form-control" id="calendario">
                        <div class="input-group-addon">
                            <ion-icon name="apps"></ion-icon>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="time">Hora</label>
                    <div class="input-group date">
                        <input type="time" name="hora" class="form-control">
                    </div>
                </div>
                <div class="col status">
                    <div class="row">
                        <label>Status da tarefa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="etapa" id="inlineRadio1" value="fazendo">
                        <label class="form-check-label" for="inlineRadio1">Fazendo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="etapa" id="inlineRadio2" value="feito">
                        <label class="form-check-label" for="inlineRadio2">Feito</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        </section>
    </div>
</body>