 
<?php
 
 session_start();

 if($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST['username'] && $_POST ['password']){
        $username = $_POST ['username'];
        $password = $_POST ['password'];
    }
     
     if($username == 'professor' && $password == 'professor'){
         $_SESSION['loggedin'] = TRUE;
         $_SESSION["username"] = 'professor';
          header("location: dashboard.php");

     } else if ($username == 'biblio' && $password == 'biblio') {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'biblio';
         header("location: biblio.php");

       } else{
         $_SESSION['loggedin'] = FALSE;
         header("location: nada.php");
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
 <link rel="stylesheet" href="login.css">
 <body>
     <header>
         <h1>  Biblioteca Fatec Araras </h1>
        
        
     </header>
     
     <img src="images-removebg-preview.png" alt="image.png">
        
     
             
  
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
          <label for="username">Username:</label>
         <input type="text" name="username" class="form-control" value="" required> 
         <br><br/>
         <label for="password">Password:</label>
         <input type="password" name="password" class="form-control" value="" required>
         <div>
             <input type="submit" value="Entrar">
         </div>
       </form>
      
    
  
    
 </body>
 </html>
