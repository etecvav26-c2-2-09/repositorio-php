<?php
include("index.php");
if ($_POST) {
    $n1 = $_POST['n1']; $n2 = $_POST['n2']; $op = $_POST['op'];
    if ($op == "/" && $n2 == 0) echo "Erro: Divisão por zero";
    else {
        eval("\$res = $n1 $op $n2;"); // eval é simples, mas use com cautela!
        echo "Resultado: $res";
    }
}
?>