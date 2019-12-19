<script>

function validar() {
    if (document.formCategoria.descricao.value==""){
        alert('Informe o nome da categoria');
		document.formUser.descricao.focus();
		return false;
	}else {
	
	return true; }
}

</script>

<div class="modal fade bd-example-modal-lg" id="ModalCategoria" tabindex="-1" role="dialog" aria-labelledby="nova-categoria" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="title-categoria">Categorias</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="container-fluid ">
            <table class="table table-striped">
                <thead id="thead-categoria">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th></th>
                    </tr>
                </thead>
                <?php
                    $resultado = $con->query("SELECT * FROM categorias");
                    
                    foreach($resultado as $categoria){
                ?> 
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $categoria["id_categoria"];?></th>
                        <td><?php echo $categoria["descricao"];?></td>
                        <td>
                            <div class="icones row">
                                <div class="">
                                    <a class="icon" href="edita-categoria.php?id_categoria=<?php echo $categoria["id_categoria"] ?>"><img src="img/icons/edit-file.png" width="25"></a>
                                </div>
                                <div class="">
                                    <a class="icon" href="exclue-categoria.php?id_categoria=<?php echo $categoria["id_categoria"] ?>"><img src="img/icons/remove-file.png" width="25"></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>   
        </div>

        
        <div class="modal-body">
        <h5 class="title" id="nova-categoria">Cadastre uma nova categoria</h5>
            <form name="formCategoria" onSubmit="return validar();" action="insere-categoria.php" method="POST">
            <div class="form-group">    
                <label for="exampleInputPassword1">Nome</label>
                <input type="text" class="form-control" name="descricao"  placeholder="Ex: Estudo">
            </div>
            <button type="submit" class="btn btn-primary" id="btn-categoria">Salvar mudanças</button>
            </form>
    
        </div>
        
        </div>
    </div>
</div>
