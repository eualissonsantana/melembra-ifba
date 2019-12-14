<?php 
    include("topo.php");
?>


<section class="container-fluid box-geral">
    <section class="row d-flex justify-content-init">
        <article class="btn-tarefa">
            <button type="button" class="btn btn-outline-light" id="btn-categorias" data-toggle="modal" data-target="#ModalCategoria">+ Categorias</button>
            <button type="button" class="btn btn-outline-dark" id="btn-tarefas" data-toggle="modal" data-target="#ModalTarefas">+ Tarefas</button>
        </article>
    </section>
    
    <!-- Modal Categoria -->
    <?php include("categoria.php"); ?>

    <!-- Modal Tarefas-->
    <?php include("tarefa.php"); ?>

    
    <!-- Modal Altera Tarefas-->
    <?php include("modal-altera-tarefa.php"); ?>
    
    <article class="row">
        <section class="container box tarefas-do-dia">
            
            <section class="titulo-box">
                <h3>Para hoje</h3>
                <hr>
            </section>

            <?php
                    $resultado = $con->query("SELECT * FROM tarefas WHERE fk_usuario = '$id_usuario'");
                    
                    foreach($resultado as $post){
                ?>                   
            <!--POSTS-->
            <article class="post container-fluid">
                
                <article class="row d-flex">
                    <div class="col-8">
                        <h4><?php echo $post["titulo"]; ?></h4>
                    </div>
                    <div class="col-4">
                        <div class="icones row">
                            <div class="">
                                <a class="icon" type="button" data-toggle="modal" data-target="#ModalAlteraTarefa" data-id="<?php echo $post["id_tarefa"] ?>"><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row rodape d-flex justify-content-end">
                    <article class="time ">
                        <h5 id="data"><?php echo $post["dia"];?></h5>
                    </article>
                    <article class="time ">
                        <h5><?php echo $post["hora"];?></h5>
                    </article>
                </section>
            </article>
            <?php } ?>
        </section>

        <section class="container box to-do">
            <section class="titulo-box">
                <h3>Para fazer</h3>
                <hr>
            </section>
            <?php
                    $resultado = $con->query("SELECT * FROM tarefas WHERE fk_usuario = '$id_usuario'");
                    
                    foreach($resultado as $post){
                ?>                   
            <!--POSTS-->
            <article class="post container-fluid">
                
                <article class="row d-flex">
                    <div class="col-8">
                        <h4><?php echo $post["titulo"]; ?></h4>
                    </div>
                    <div class="col-4">
                        <div class="icones row">
                            <div class="">
                                <a class="icon" href=""><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row rodape d-flex justify-content-end">
                    <article class="time ">
                        <h5 id="data"><?php echo $post["dia"];?></h5>
                    </article>
                    <article class="time ">
                        <h5><?php echo $post["hora"];?></h5>
                    </article>
                </section>
            </article>
            <?php } ?>
        </section>

        <section class="container box doing" id="box-doing">
            <section class="titulo-box">
                <h3>Fazendo</h3>
                <hr>
            </section>

            <?php
                    $resultado = $con->query("SELECT * FROM tarefas WHERE fk_usuario = '$id_usuario'");
                    
                    foreach($resultado as $post){
                ?>                   
            <!--POSTS-->
            <article class="post container-fluid">
                
                <article class="row d-flex">
                    <div class="col-8">
                        <h4><?php echo $post["titulo"]; ?></h4>
                    </div>
                    <div class="col-4">
                        <div class="icones row">
                            <div class="">
                                <a class="icon" href=""><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row rodape d-flex justify-content-end">
                    <article class="time ">
                        <h5 id="data"><?php echo $post["dia"];?></h5>
                    </article>
                    <article class="time ">
                        <h5><?php echo $post["hora"];?></h5>
                    </article>
                </section>
            </article>
            <?php } ?>
        </section>

        <section class="container box done">
            <section class="titulo-box">
                <h3>Feito</h3>
                <hr>
            </section>

            <?php
                    $resultado = $con->query("SELECT * FROM tarefas WHERE fk_usuario = '$id_usuario'");
                    
                    foreach($resultado as $post){
                ?>                   
            <!--POSTS-->
            <article class="post container-fluid">
                <article class="row d-flex">
                    <div class="col-8">
                        <h4><?php echo $post["titulo"]; ?></h4>
                    </div>
                    <div class="col-4">
                        <div class="icones row">
                            <div class="">
                                <a class="icon" href=""><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row rodape d-flex justify-content-end">
                    <article class="time ">
                        <h5 id="data"><?php echo $post["dia"];?></h5>
                    </article>
                    <article class="time ">
                        <h5><?php echo $post["hora"];?></h5>
                    </article>
                </section>
            </article>
            <?php } ?>            
        </section>
    </article>
</section>
<script>
    $('#ModalAlteraTarefa').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var id_tarefa = button.data('id') 
    var modal = $(this)
    modal.find('#titulo-tarefa').val(id_tarefa)
})
</script>
</body>
</html>