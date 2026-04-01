<!--
Data: 20/03/2026
Feito por: Rian Andrade
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="script.php" method="post">
    Valor: <input type="number" name="valor" required>
    Unidade: 
    <select name="unidade">
        <option value="C">Celsius para Fahrenheit</option>
        <option value="F">Fahrenheit para Celsius</option>
    </select>
    <input type="submit" value="Converter">
</form>
</body>
</html>