<?php
include("conecta.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$numero = $_POST["numero"];

if(isset($_POST["gravar"]))
{

$comando = $pdo->prepare("INSERT INTO agenda VALUE('$nome' ,'$email',$numero)");
$resultado = $comando->execute();
    header("Location: index.html");

}
if(isset($_POST["excluir"]))
{
    $comando = $pdo->prepare("DELETE FROM agenda WHERE nome='$nome'");
    $resultado = $comando->execute();
    header("Location: index.html"); 
}
if(isset($_POST["alterar"]))
{
    $comando = $pdo->prepare ("UPDATE agenda SET 
    nome='$nome', email='$email' WHERE nome='$nome'");
    $resultado = $comando->execute();
    header("Location: index.html");
}
if(isset($_POST["listar"]))
{
    $comando = $pdo->prepare("SELECT * FROM agenda ");
    $resultado = $comando->execute();

    while ( $linhas=$comando->fetch() )
    {
        $n = $linhas ["nome"];
        $e = $linhas ["email"];
        $u = $linhas ["numero"];
        
        if($u < 18)
        {
            echo 
            ("
                $n $e $u <br> <br>
            ");
        }
        else
            {
                header("Location: index.html");
            }
        
    }
}




?>