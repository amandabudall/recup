<?php
include("conecta.php");
$nome = $_GET["n"];


$comando = $pdo->prepare("DELETE FROM agenda WHERE nome=$nome");
$resultado = $comando->execute();

header("Location: index.html");
?>
