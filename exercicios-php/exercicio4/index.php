<!--
Data: 20/03/2026
Feito por: Luan Padovani
Objetivo: Aprofundar os conhecimentos em HTML e PHP

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6

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
    Linhas: <input type="number" name="n" min="1" required>
    <input type="submit" value="Gerar">
</form>
</body>
</html>