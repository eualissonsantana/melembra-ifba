<?php 
    include("topo.php");
    $today = date("Y-m-d");
?>


<section class="container-fluid box-geral">
    <section class="opcoes row d-flex justify-content-center">
        <h1 id="nome-user">Olá, <?php echo ($_SESSION['nome']);?></h1> 
    </section>
    <section class="row d-flex justify-content-init">
        <article class="btn-tarefa">
            <button type="button" class="btn btn-outline-light" id="btn-categorias" data-toggle="modal" data-target="#ModalCategoria">+ Categorias</button>
            <button type="button" class="btn btn-outline-light" id="btn-tarefas" data-toggle="modal" data-target="#ModalTarefas">+ Tarefas</button>
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
                    $resultado = $con->query("SELECT t.titulo, t.id_tarefa, t.descricao, t.dia, t.hora, c.descricao as categoria from tarefas as t inner join categorias as c WHERE t.fk_categoria = c.id_categoria and t.fk_usuario = '$id_usuario' and t.dia = '$today' and t.etapa = 'agendado'");
                    $rows = $resultado->rowCount();

                    if($rows != 0) {
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
                                <a class="icon"  href="edita-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row">
                    <section class="col-4 rodape d-flex justify-content-start">
                        <article class="tipo">
                            <h5><?php echo $post["categoria"];?></h5>
                        </article>
                    </section>
                    <section class="col-8 ">
                        <article class="row rodape d-flex justify-content-end">
                            <article class="time ">
                                <h5 id="data"><?php echo date('d-m-Y', strtotime($post['dia']));?></h5>
                            </article>
                            <article class="time ">
                                <h5><?php echo $post["hora"];?></h5>
                            </article>
                        </article>
                    </section>
                </section>
            </article>
            <?php } 
                }else {
                    ?><h4 class="no-task">Sem tarefas cadastradas</h4><?php
                }
            ?>
        </section>

        <section class="container box to-do">
            <section class="titulo-box">
                <h3>Para fazer</h3>
                <hr>
            </section>
            <?php
                    $resultado = $con->query("SELECT t.titulo, t.id_tarefa, t.descricao, t.dia, t.hora, c.descricao as categoria FROM tarefas as t inner join categorias as c WHERE t.fk_categoria = c.id_categoria and t.fk_usuario = '$id_usuario' and t.etapa = 'agendado'");
                    $rows = $resultado->rowCount();

                    if($rows != 0) {
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
                                <a class="icon"  href="edita-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row">
                    <section class="col-4 rodape d-flex justify-content-start">
                        <article class="tipo">
                            <h5><?php echo $post["categoria"];?></h5>
                        </article>
                    </section>
                    <section class="col-8 ">
                        <article class="row rodape d-flex justify-content-end">
                            <article class="time ">
                                <h5 id="data"><?php echo date('d-m-Y', strtotime($post['dia']));?></h5>
                            </article>
                            <article class="time ">
                                <h5><?php echo $post["hora"];?></h5>
                            </article>
                        </article>
                    </section>
                </section>
            </article>
            <?php } 
                }else {
                    ?><h4 class="no-task">Sem tarefas cadastradas</h4><?php
                }
            ?>
        </section>

        <section class="container box doing" >
            <section class="titulo-box">
                <h3>Fazendo</h3>
                <hr>
            </section>

            <?php
                    $resultado = $con->query("SELECT t.titulo, t.id_tarefa, t.descricao, t.dia, t.hora, c.descricao as categoria FROM tarefas as t inner join categorias as c WHERE t.fk_categoria = c.id_categoria and t.fk_usuario = '$id_usuario' and t.etapa = 'fazendo'");
                    $rows = $resultado->rowCount();

                    if($rows != 0) {
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
                                <a class="icon"  href="edita-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row">
                    <section class="col-4 rodape d-flex justify-content-start">
                        <article class="tipo">
                            <h5><?php echo $post["categoria"];?></h5>
                        </article>
                    </section>
                    <section class="col-8 ">
                        <article class="row rodape d-flex justify-content-end">
                            <article class="time ">
                                <h5 id="data"><?php echo date('d-m-Y', strtotime($post['dia']));?></h5>
                            </article>
                            <article class="time ">
                                <h5><?php echo $post["hora"];?></h5>
                            </article>
                        </article>
                    </section>
                </section>
            </article>
            <?php } 
                }else {
                    ?><h4 class="no-task">Sem tarefas cadastradas</h4><?php
                }
            ?>
        </section>

        <section class="container box done">
            <section class="titulo-box">
                <h3>Feito</h3>
                <hr>
            </section>

            <?php
                    $resultado = $con->query("SELECT t.titulo, t.id_tarefa, t.descricao, t.dia, t.hora, c.descricao as categoria FROM tarefas as t inner join categorias as c WHERE t.fk_categoria = c.id_categoria and t.fk_usuario = '$id_usuario' and t.etapa = 'feito'");
                    $rows = $resultado->rowCount();

                    if($rows != 0) {
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
                                <a class="icon"  href="edita-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/edit-file.png" width="25"></a>
                            </div>
                            <div class="">
                                <a class="icon" href="exclue-tarefa.php?id_tarefa=<?php echo $post["id_tarefa"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                            </div>
                        </div>
                    </div>
                </article>
                <hr>
                <p><?php echo $post["descricao"];?></p>
                <section class="row">
                    <section class="col-4 rodape d-flex justify-content-start">
                        <article class="tipo">
                            <h5><?php echo $post["categoria"];?></h5>
                        </article>
                    </section>
                    <section class="col-8 ">
                        <article class="row rodape d-flex justify-content-end">
                            <article class="time ">
                                <h5 id="data"><?php echo date('d-m-Y', strtotime($post['dia']));?></h5>
                            </article>
                            <article class="time ">
                                <h5><?php echo $post["hora"];?></h5>
                            </article>
                        </article>
                    </section>
                </section>
            </article>
            <?php } 
                }else {
                    ?><h4 class="no-task">Sem tarefas cadastradas</h4><?php
                }
            ?>          
        </section>
    </article>
</section>

<?php include("rodape.php");?>
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