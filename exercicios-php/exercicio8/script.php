<?php
include("index.php");
function soma($n) {
    $s = 0;
    for($i=0; $i<=$n; $i++) $s += $i;
    return $s;
}

if ($_POST) echo "Resultado: " . soma($_POST['n']);
?>