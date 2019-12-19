<html>
<head>
    <meta charset="utf-8">
    <title>Me lembra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montserrat&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <section class="container-fluid" id="tela-inicial">
        <article class="container logo d-flex justify-content-center">
            <h1>Me Lembra</h1>
        </article>

        <article class="container col-10 descricao justify-content-center">
            <p>
            É um projeto solicitado pelo professor Rabelo e válido como nota para a disciplina de programação
            web, do curso de bacharelado em Sistemas de Informação. 

            O site consiste basicamente em um sistema que gere as tarefas do dia a dia, baseada no modelo Kanban.
            É possivel cadastrar atividades que são divididas em 4 estágios: Para hoje, Para fazer, Fazendo e Feito.
            <br><br>
            Para utilizar o sistema é necessário criar uma conta e logo depois logar.
            </p>
        </article>

        <article class="botoes d-flex justify-content-around">
            <button type="button" onclick="window.location.href = 'form-user.php';" id="btn-criar" class="btn btn-primary">Crie uma conta</button>
            <button type="button" onclick="window.location.href = 'form-login.php';" id="btn-login"class="btn btn-primary">Faça login</button>
        </article>
    </section>
    
</body>
</html>