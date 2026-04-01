<?php

include("index.php");
if($_POST){
    $n = $_POST["n"];
    $t1 = 0;
    $t2 = 1;

    echo "Série de Fibonacci ($n termos): $t1 $t2 ";

    for ($i = 3; $i <= $n; $i++) {
        $t3 = $t1 + $t2;
        echo "$t3 ";
        $t1 = $t2;
        $t2 = $t3;
    }
}

?>