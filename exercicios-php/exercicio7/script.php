<?php
include("index.php");
if ($_POST) {
    $nums = explode(" ", $_POST['lista']);
    $pos = []; $neg = [];
    foreach($nums as $n) {
        if ($n >= 0) $pos[] = $n; else $neg[] = $n;
    }
    echo "Positivos: " . implode(", ", $pos) . "<br>Negativos: " . implode(", ", $neg);
}
?>