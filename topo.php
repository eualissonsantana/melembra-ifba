<?php 
include("cabecalho.php");
include("conexao.php");
?>
<body>
    <header>
        <?php 
            session_start();
            $nome = $_SESSION['nome'];
            $id_usuario = $_SESSION['id_usuario'];
        ?>
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
                <section class="opcoes row">
                    <h4><?php echo ($_SESSION['nome']);?></h4> 
                </section>
                <section class="imagem">
                    <img src="img/alisson.jpeg" width="40px">     
                </section>
            </section>
        </nav>
    </header>
    <!--FIM HEADER-->