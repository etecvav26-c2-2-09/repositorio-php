<!--
Data: 27/03/2026
Feito por: João Vitor Santana
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:

É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100

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
    Ano: <input type="number" name="ano" required>
    <input type="submit" value="Verificar">
</form>
</body>
</html>