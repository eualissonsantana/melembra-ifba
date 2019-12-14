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
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
        </div>
    </div>
</div>
    