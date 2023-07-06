<?php
    include("conecta.php");

    $email  = $_POST["email"];
    $nome       = $_POST["nome"];
    $fone      = $_POST["fone"];

    $comando = $pdo->prepare("INSERT INTO usuario VALUES($email,'$nome',$fone)" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: cadastro.html");


?>