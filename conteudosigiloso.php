<?php
ob_start();
?>
<html>
    <head>
        <title>Sessão e cookies: conteúdo sigiloso</title>
    </head>
    <body>
         <?php
          session_start();
          if(!isset($_SESSION["usuario"]))
         
          {
            echo "Erro";
            exit();
          }
          echo "Olá ".$_SESSION["usuario"];
          echo "<br><BR>";
        ?>
        <h1>[Conteúdo privado/sigiloso]</h1>
        <hr>
        <img src="imagem.jpg">
         <p><a href="logout.php">LOGOUT</a></p>
    </body>
</html>