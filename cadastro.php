<?php

include_once 'conexao.php';



  $nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
  $email = isset($_POST['email']) == true ?$_POST['email']:"";
  $senha = isset($_POST['senha']) == true ?$_POST['senha']:"";
  
  $sql_cadastro = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  
   if($conn->query($sql_cadastro)== TRUE){
    header("Location: form.html");
   }

  $conn->close()
 

?>