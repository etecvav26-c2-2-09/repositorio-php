<!--
Data: 20/03/2026
Feito por: Rian Andrade
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
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
    <input type="number" name="n1" required>
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="n2" required>
    <button type="submit">=</button>
</form>
</body>
</html>