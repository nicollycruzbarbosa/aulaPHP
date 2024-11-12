<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebidas</title>
</head>
<body>
<h1>Escolha sua bebida</h1>

<form method="POST">
    <label>Escolha um número de 1 a 3:</label>
    <input type="text" name="bebida" placeholder="Escolha sua bebida" require>
    <button type="submit">Escolher</button>
</form>

<?php
 $bebida = $_POST['bebida'];



    switch ($bebida) {

        case 1:
            $preco = 2.50;
            $nomebebida = "Agua";
        break;
        case 2:
            $preco = 4.00;
            $nomebebida = "Refrigerante";
        break;
        case 3:
            $preco = 3.50;
            $nomebebida = "Suco";
        break;
        default:
            echo "Opção inválida" ;
            exit;
        
    }

    echo "<p> Você escolheu: $nomebebida</p>";
    echo "Preço : " . number_format($preco, 2, ',');
?>