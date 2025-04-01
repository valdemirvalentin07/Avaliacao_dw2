<?php
 
session_start(); // Inicia a sessão
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if(!isset($_SESSION['loggedin'])){
            header("location: dashboard.php");
            exit;
        }else{
            $titulo_do_livro = $_POST['titulodolivro'];
            $autor = $_POST['autor'];
            $editora = $_POST['editora'];
            $isbn = $_POST['isbn'];
 
 
            $info = " $titulo_do_livro  | $autor | $editora | $isbn  \n\n";
    $handle = fopen("pedidos.txt", "a");
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

<h2>Cadastrar pedidos de livros</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="titulodolivro">Título do livro</label>
        <input type="text" name="titulodolivro" >
        <br><br/>
        <label for="autor">Autor</label>
        <input type="text" name="autor" >
        <br><br/>
        <label for="editora">Editora</label>
        <input type="text" name="editora" >
        <br><br/>
        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" >
        <br><br/>

        <input type="submit" value="enviar">
    </form>
    
</body>
</html>