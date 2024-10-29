<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder= "Digite a sua idade" require>
        <button type= "submit"> Verificar</button>

    </form>

    
    <?php

        $idade = 18;
    
    // verificar a idade
        if ($idade >= 18){
    
            echo "<p>Você pode dirigir</p>";
    
        } else {
            
            echo "<p>Você não pode dirigir</p>";
        }
    
        

    ?>

</body>
</html>