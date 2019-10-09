<?php
    include("conexao.php");
    
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha=md5($_POST["senha"]);
    
    $sql="INSERT INTO usuarios(nome,email,senha) VALUES ('$nome', '$email', '$senha')";
    
	if(mysqli_query($conexao, $sql))
    {
      echo "<h1>Usuário cadastrado com Sucesso!</h1>";
    }
    else
    {
      echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    echo "<a href=index.html>Página Inicial</a>";
?>