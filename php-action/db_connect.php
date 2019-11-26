
<?php
$link = mysqli_connect("localhost", "root", "", "bd_melembra");
 
if (!$link) {
    die("Falha de conexão: " .mysqli_connect_erro());
    exit;
}
 
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
 
?> 