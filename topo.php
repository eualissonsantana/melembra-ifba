<?php 
date_default_timezone_set('America/Sao_Paulo');
include("cabecalho.php");
include("conexao.php");
?>
<body>
    <header>
        <?php 
            session_start();
            if(isset($_SESSION['nome']) && !empty($_SESSION['nome'])){
                $nome = $_SESSION['nome'];
                $id_usuario = $_SESSION['id_usuario'];
            }else {
                header('Location: form-login.php');
            }
            
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-between">
            <section class="container collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav" id="menu">
                    <a type="button" class="btn btn-outline-light" href="#">Sobre <span class="sr-only">(Página atual)</span></a>
                </div>
            </section>

            <section class="container d-flex justify-content-center">    
                <a class="navbar-brand" href="#" id="logo">Me Lembra</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </section>
                <section class="session-user row container d-flex justify-content-end">
                <?php 
                    $resultado = $con->query("SELECT imagem FROM usuario WHERE id_usuario = '$id_usuario'");
                    foreach($resultado as $post){
                ?>
                <section class="imagem">
                    <img src="img/users/<?php echo $id_usuario?>/<?php echo $post['imagem']?>" width="40px" height="40px">     
                </section>
                <section class="sair">
                    <a type="button" href="logout.php" class="btn btn-outline-light" >Sair</a>
                </section>
                    <?php } ?>
            </section>
            
        </nav>
    </header>
    <!--FIM HEADER-->