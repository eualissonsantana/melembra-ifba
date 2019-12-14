<?php 
include("cabecalho-forms.php");
?>

<body>
    <section class="secao-cadastro">
        <section class="container col-4 form">
            <form method="POST" action="login.php">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuário</label>
                    <input type="text" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </section>
    </section>
</body>