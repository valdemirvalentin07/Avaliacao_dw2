<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="biblio.css">
</head>
<body>
    <h1>Bibliotecário</h1>
    <h2>Seja bem-vindo</h2>
    <br><br/>
    <h3> Área de Cadastros:</h3>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <a href="cadastrarlivros.php"> Cadastrar Livros</a>
    <br><br/>
    <a href="listar_p.php">Listar pedidos de livros</a>
    <br><br/>
    <a href="listar_t.php">Listar todos os livros </a>
    <br><br/>
   
    
        </form>

        <a href="login.php">Voltar a área de login.</a>



    

</body>
</html>