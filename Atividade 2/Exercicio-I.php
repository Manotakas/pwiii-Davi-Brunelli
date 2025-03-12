<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico I</title>
</head>
<body>
    
<h1>Calculadora de Parcelas: </h1>
<br>
<form method="POST">

<label>Valor:</label>

<input type="number" name = "n1" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$n1 = $_POST["n1"];
$porcentagem = 0.16;

$au = $n1*$porcentagem;
$total = $n1+$au;
$parcelar = $total/10;


echo "<br> Aumentando o valor em 16% fica ", $total ," e parcelado em 10 vezes é ",$parcelar; 


}
?>

</body>
</html>