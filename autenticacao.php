<?php
ob_start();
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
           include("conexao.php");
    
           //verificar formulário para autenticação
           $senha=md5($_POST["senha"]);
           $email=$_POST["email"];
           
           $sql="SELECT nome FROM usuarios WHERE email='$email' AND senha='$senha'";
           $resultado=mysqli_query($conexao, $sql);
           $linhas=mysqli_affected_rows($conexao);
           
           if($linhas>0)
           {
                session_start();
                $_SESSION["usuario"]=$email;
                while($exibirNome=mysqli_fetch_array($resultado))
                {
                    $nome=$exibirNome[0];
                    $nome_usuario=$exibirNome[1];
                    $senhausuario=$exibirNome[2];
                }
                $_SESSION['nome']=$nome;
                header("location: conteudosigiloso.php");
           }
                else
                {
                    echo "Dados incorretos! <br>";
                }
        ?>
    </body>
</html>
