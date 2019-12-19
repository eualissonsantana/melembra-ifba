<?php 
include("cabecalho-forms.php");
include("conexao.php");
?>
<script>

function validar() {
    if (document.formUser.email.value==""){
        alert('Informe o email');
		document.formUser.email.focus();
		return false;
	}else if (document.formUser.foto.value==""){
        alert("Insira a foto");
		document.formUser.foto.focus();
		return false;
	}else if (document.formUser.usuario.value==""){
		alert("Informe o seu nome de usuário");
		document.formUser.usuario.focus();
		return false;
	}else if (document.formUser.nome.value==""){
		alert("Informe o nome");
		document.formUser.nome.focus();
		return false;
	} else if (document.formUser.senha.value==""){
		alert("Informe a senha");
		document.formUser.senha.focus();
		return false;
	} else if (document.formUser.senha2.value==""){
		alert("Confirme a sua senha");
		document.formUser.senha2.focus();
		return false;
	}else if (document.formUser.senha.value != document.formUser.senha2.value){
		alert("Senhas informadas diferentes");
		document.formUser.senha.focus();
		return false;
	}
	else {
	
	return true; }
}

</script>
<body>
    <section class="secao-cadastro">
        <section class="container col-5 form">
            <form name="formUser" method="POST" onSubmit="return validar();" enctype="multipart/form-data" action="insere-user.php">
                <h2>Cadastro de Usuário</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto de usuário</label>
                    <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
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
                            <label for="exampleInputPassword1">Usuário</label>
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
                            <input type="password" name="senha2" class="form-control" id="exampleInputPassword1" placeholder="Confirme a senha">
                        </div>
                    </div>
                </div>
                <button type="submit" name="btn-Cadastro" class="btn btn-primary">Cadastrar</button>
            </form>
        </section>
    </section>
</body>