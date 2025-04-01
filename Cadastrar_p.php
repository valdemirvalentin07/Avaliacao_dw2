<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de livros</title>
</head>
<body>


    


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="post">
        <label for="titulo do livro">Título do livro</label>
        <input type="text" name="titulo do livro" value="">
        <br><br/>
        <label for="autor">Autor</label>
        <input type="text" name="autor" value="">
        <br><br/>
        <label for="editora">Editora</label>
        <input type="text" name="editora" value="">
        <br><br/>
        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" value="">
        <br><br/>

        <input type="text" value="enviar">
    </form>
</body>
</html>