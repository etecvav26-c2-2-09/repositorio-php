<?php
include("index.php");
if ($_POST) {
    $lista = explode(",", $_POST['nums']);
    $soma = 0;
    foreach ($lista as $n) {
        $f = 1;
        for($i = trim($n); $i > 1; $i--) $f *= $i;
        $soma += $f;
    }
    echo "Soma total: $soma";
}
?>