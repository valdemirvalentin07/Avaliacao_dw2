 
<?php
// Inicia uma sessão para armazenar variáveis de sessão para os usuários
session_start();

// Verifica se o método de requisição é POST, ou seja, se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se os campos 'username' e 'password' foram preenchidos antes de acessá-los
    if ($_POST['username'] && $_POST['password']) {
        $username = $_POST['username']; // Armazena o nome de usuário enviado pelo formulário
        $password = $_POST['password']; // Armazena a senha enviada pelo formulário
    }

    // Verifica se o usuário e senha correspondem ao login do professor
    if ($username == 'professor' && $password == 'professor') {
        $_SESSION['loggedin'] = TRUE; // Define a variável de sessão indicando que o usuário está autenticado
        $_SESSION["username"] = 'professor'; // Armazena o nome de usuário na sessão
        header("location: dashboard.php"); // Redireciona para a página do professor
        exit; // Finaliza a execução do script após o redirecionamento

    // Verifica se o usuário e senha correspondem ao login do bibliotecário
    } else if ($username == 'biblio' && $password == 'biblio') {
        $_SESSION['loggedin'] = TRUE; // Define a variável de sessão indicando que o usuário está autenticado
        $_SESSION["username"] = 'biblio'; // Armazena o nome de usuário na sessão
        header("location: biblio.php"); // Redireciona para a página do bibliotecário
        exit; // Finaliza a execução do script

    } else {
        $_SESSION['loggedin'] = FALSE; // Define como falso caso a autenticação falhe
        header("location: nada.php"); // Redireciona para uma página de erro ou acesso negado
        exit; // Finaliza o script
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação do documento para UTF-8, garantindo suporte a caracteres acentuados -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a escala para dispositivos móveis -->
    <title>Document</title> <!-- Define o título da página -->
    <link rel="stylesheet" href="login.css"> <!-- Importa um arquivo CSS para estilização -->
</head>
<body>
    <header>
        <h1>Biblioteca Fatec Araras</h1> <!-- Cabeçalho principal da página -->
    </header>
    
    <img src="images-removebg-preview.png" alt="Logo da Biblioteca"> <!-- Imagem que representa a biblioteca -->
    
    <!-- Formulário de login que envia os dados via método POST para a mesma página -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" value="" required> <!-- Campo de entrada para o nome de usuário -->
        <br><br/>
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" value="" required> <!-- Campo de entrada para senha -->
        <div>
            <input type="submit" value="Entrar"> <!-- Botão de submissão do formulário -->
        </div>
    </form>
</body>
</html>
