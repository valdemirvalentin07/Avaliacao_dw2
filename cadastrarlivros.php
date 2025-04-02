<?php
 
session_start(); // Inicia a sessão

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifica se o usuário está logado
    if (!isset($_SESSION['loggedin'])) {
        // Redireciona para a página "biblio.php" caso o usuário não esteja logado
        header("location: biblio.php");
        exit;
    } else {
        // Captura os dados enviados pelo formulário
        $titulo_do_livro = $_POST['titulodolivro'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $isbn = $_POST['isbn'];

        // Formata as informações do livro para serem salvas no arquivo "livros.txt"
        $info = " $titulo_do_livro | $autor | $editora | $isbn | \n\n";
        
        // Abre o arquivo "livros.txt" no modo de escrita (append) e grava os dados
        $handle = fopen("livros.txt", "a");
        fwrite($handle, $info);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Cadastros para livros</h2>
<br>

<!-- Formulário de cadastro de livros -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="titulo do livro">Título do livro</label>
        <input type="text" name="titulodolivro" id="titulodolivro">
        <br><br/>
        
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor">
        <br><br/>
        
        <label for="editora">Editora</label>
        <input type="text" name="editora" id="editora">
        <br><br/>
        
        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" id="isbn">
        <br><br/>

        <input type="submit" value="enviar">
</form>

</body>
</html>
