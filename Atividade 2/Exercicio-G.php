<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico G</title>
</head>
<body>
    
<h1>Calculadora de Volume de uma caixa retangular </h1>
<br>
<form method="POST">

<label>Largura:</label>

<input type="number" name = "n1" required>

<br><br>

<label >Altura:</label>

<input type="number" name = "n2" required>

<br><br>

<label >Comprimento:</label>

<input type="number" name = "n3" required>

<br><br>
<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];


$volume = $n1*$n2*$n2;

echo "<br> O Volume da caixa é ", $volume; 


}
?>

</body>
</html>
