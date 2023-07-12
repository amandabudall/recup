<?php
include("conecta.php");
  
if(isset($_POST["nome"]))
{
    $nome = $_POST["nome"];
    
   
}

if(isset($_POST["email"])){
    $email = $_POST["email"];
}


if(isset($_POST["numero"])){
    $numero = $_POST["numero"];
}

if(isset($_POST["gravar"]))
{

$comando = $pdo->prepare("INSERT INTO agenda VALUE('$nome' ,'$email',$numero)");
$resultado = $comando->execute();
    header("Location: indexdois.php");

}
if(isset($_POST["excluir"]))
{
    $comando = $pdo->prepare("DELETE FROM agenda WHERE nome='$nome'");
    $resultado = $comando->execute();
    header("Location: indexdois.php"); 
}
if(isset($_POST["alterar"]))
{
    $comando = $pdo->prepare ("UPDATE agenda SET 
    nome='$nome', email='$email' WHERE nome='$nome'");
    $resultado = $comando->execute();
    header("Location: indexdois.php");
}
if(isset($_POST["listar"]))
{

}




?>