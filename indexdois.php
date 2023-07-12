<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperação - agenda telefonica</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form action="crud.php" method="post">

        <br> <br>
        <input type="submit" value="EXCLUIR" name="excluir">
        <form action="crud.php" method="post">
        Digite seu nome:
        <input type="text" name="nome" id="nome">
       
        <a href="indexdois.html" target="_self">
            
         </a>
        
    </form>
   
        
    <form action="crud.php" method="post">
        
    <input type="submit" value="ALTERAR" name="alterar">
        Digite seu nome:
        <input type="text" name="nome" id="nome">
        <br><br>
        Digite seu email:
        <input type="text" name="email" id="email">
        <br><br>
        Digite o número:
        <input size="10" type="text" name="numero" id="numero">
        <br> <br>
        <a href="indexdois.php" target="_self">
            
         </a>
        
    </form>
       
        
        <?php 
                
                include("conecta.php");
                $comando = $pdo->prepare("SELECT * FROM agenda ");
                $resultado = $comando->execute();
            
                while ( $linhas=$comando->fetch() )
                {
                  
                          
                    $nome = $linhas ["nome"];
                    $email = $linhas ["email"];
                    $numero = $linhas ["numero"];
                    
                    
                        echo 
                        ("
                        <br> <br>
                            $nome $email $numero <br> <br>
                        ");
                        
                  
                    
                    
            
                  
                }
        
        ?>
    </form>
   
    
</body>

<script>
    function Excluir(){
         n = nome.value
         window.open("excluir.php?m="+n,"_self")
    }

</script>

</html>