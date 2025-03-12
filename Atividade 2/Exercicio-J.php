<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico J</title>
</head>
<body>
    
<h1>Calculadora de distancia percorrida</h1>

<form method="POST">

<label>km:</label>

<input type="number" name = "n1" required>

<br><br>

<label >Gasolina:</label>

<input type="number" name = "n2" required>

<br><br>

<input type="submit" value = "Calcular">

</form>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$total = $n1+$n2;

 
echo "<br> A distancia que sera percorrida é de ", $total,"km"; 

}
?>

</body>
</html>

