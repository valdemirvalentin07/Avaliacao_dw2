<?php
// Inicia a sessão para verificar se o usuário está logado
session_start(); 

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se o usuário está logado
    if (!isset($_SESSION['loggedin'])) {
        // Se não estiver logado, redireciona para a página do dashboard
        header("location: dashboard.php");
        exit;
    } else {
        // Captura os dados do formulário enviados pelo usuário
        $titulo_do_livro = $_POST['titulodolivro'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $isbn = $_POST['isbn'];

        // Formata as informações do livro para salvar no arquivo "pedidos.txt"
        $info = " $titulo_do_livro  | $autor | $editora | $isbn  \n\n";
        
        // Abre o arquivo "pedidos.txt" em modo de escrita (append)
        $handle = fopen("pedidos.txt", "a");
        
        // Escreve as informações no arquivo
        fwrite($handle, $info);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pedidos de livros</title>
</head>
<body>

<h2>Cadastrar pedidos de livros</h2>

<!-- Formulário para entrada de dados -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="titulodolivro">Título do livro</label>
    <input type="text" name="titulodolivro">
    <br><br/>

    <label for="autor">Autor</label>
    <input type="text" name="autor">
    <br><br/>

    <label for="editora">Editora</label>
    <input type="text" name="editora">
    <br><br/>

    <label for="isbn">ISBN</label>
    <input type="text" name="isbn">
    <br><br/>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
