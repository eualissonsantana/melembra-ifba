<?php 
include("cabecalho-forms.php");
?>

<body>
    <section class="secao-cadastro">
        <section class="container col-5 form">
            <form method="POST" action="insere-user.php">
                <h2>Cadastro de Usuário</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nickname</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Seu nome de usuário" > 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmar Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme a senha">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </section>
    </section>
</body>