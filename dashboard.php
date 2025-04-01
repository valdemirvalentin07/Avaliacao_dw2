<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h1>dashboard</h1>
    <h2>Seja bem-vindo</h2>
    <br><br/>
    <h3 claass="navbar">Você esta na área de professores</h3>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <a href="listarpedidos.php">Listar todos os livros </a>
    <br><br/>
    <a href="listasdepedidos.php">Cadastrar pedidos de livros</a>

        </form>
        
<br><br/>
        <a href="login.php">Voltar a área de login.</a>






    

</body>
</html>