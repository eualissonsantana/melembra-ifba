<?php include("conexao.php"); ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Me lembra</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montserrat&display=swap" rel="stylesheet">
        <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        
        
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-between">
                <section class="container collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" id="menu">
                        <a class="nav-item nav-link active" href="#">Sobre <span class="sr-only">(Página atual)</span></a>
                       
                    </div>
                </section>

                <section class="container d-flex justify-content-center">    
                    <a class="navbar-brand" href="#" id="logo">Me Lembra</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </section>

                <section class="row container d-flex justify-content-end">
                    <section class="imagem">
                        <img src="img/alisson.jpeg" width="40px">     
                    </section>
                    <section class="opcoes row">
                        <button type="button" class="btn btn-outline-light" id="perfil">Perfil</button>
                        <button type="button" class="btn btn-outline-light" id="sair">Sair</button>
                    </section>
                </section>
            </nav>
        </header>
        <!--FIM HEADER-->

        <section class="container-fluid box-geral">
            <section class="row d-flex justify-content-init">
                <article class="btn-tarefa">
                    <button type="button" class="btn btn-outline-light" id="btn-categorias" data-toggle="modal" data-target="#ModalCategoria">+ Categorias</button>
                    <button type="button" class="btn btn-outline-dark" id="btn-tarefas" data-toggle="modal" data-target="#ModalTarefas">+ Tarefas</button>
                </article>
            </section>

            <!-- Modal Categoria -->
            <div class="modal fade" id="ModalCategoria" tabindex="-1" role="dialog" aria-labelledby="nova-categoria" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="nova-categoria">Nova Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <div class="modal-body">
                        <form action="insere-categoria.php" method="POST">
                        <div class="form-group">    
                            <label for="exampleInputPassword1">Nome</label>
                            <input type="text" class="form-control" name="descricao"  placeholder="Ex: Estudo">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                        </form>
                
                    </div>
                    
                    </div>
                </div>
            </div>


            <!-- Modal Tarefas-->
            <div class="modal fade " id="ModalTarefas" tabindex="-1" role="dialog" aria-labelledby="nova-tarefa" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="nova-tarefa">Nova Tarefa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="insere-tarefa.php" method="POST">
                            <div class="form-group">
                                <label for="name">Título</label>
                                <input type="titulo" name="titulo" class="form-control" id="titulo-tarefa">
                            </div>
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
                                <div class="col">
                                    <label for="time">Quadro</label>
                                    <div class="input-group date">
                                        <input type="number" name="fk_quadro" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            
            
            <article class="row">
                <section class="container box tarefas-do-dia">
                    
                    <section class="titulo-box">
                        <h3>Para hoje</h3>
                        <hr>
                    </section>
                    
                    
                    

                </section>

                <section class="container box to-do">
                    <section class="titulo-box">
                        <h3>Para fazer</h3>
                        <hr>
                    </section>
                    <?php
                            $resultado = $con->query("SELECT * FROM tarefas WHERE fk_quadro = 2");
                            
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
                                        <a class="icon" href=""><img src="img/icons/remove-file.png" width="25"></a>
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

                    <!--POSTS-->
                   
                </section>

                <section class="container box done">
                    <section class="titulo-box">
                        <h3>Feito</h3>
                        <hr>
                    </section>

                    <!--POSTS-->
                    
                </section>
            </article>
        </section>
    </body>
</html>