<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado, caso contrário, redireciona para a página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php"); // Redireciona para a página de login
    exit; // Encerra a execução do script
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecário</title>
    <link rel="stylesheet" href="biblio.css"> <!-- Importa o arquivo CSS para estilização -->
</head>
<body>

    <h1>Bibliotecário</h1>
    <h2>Seja bem-vindo</h2>
    <br><br/>

    <h3>Área de Cadastros:</h3>

    <!-- Links para diferentes ações do sistema -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <a href="cadastrarlivros.php">Cadastrar Livros</a>
        <br><br/>
        <a href="listar_p.php">Listar pedidos de livros</a>
        <br><br/>
        <a href="listar_t.php">Listar todos os livros</a>
        <br><br/>
    </form>

    <!-- Link para voltar à página de login -->
    <a href="login.php">Voltar à área de login.</a>

</body>
</html>
