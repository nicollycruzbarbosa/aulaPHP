<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana</title>
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
$Dia=
switch($dia){
    case1:
        echo "Domingo";
        break;

        default:
        echo "Escolha um número de 1 a 7";

        ?>
}