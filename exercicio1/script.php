<?php
include("index.php");
$numero = $_POST["num"]; 

if ($numero >= 100 && $numero <= 200) {
    echo "O número $numero está no intervalo entre 100 e 200.";
} else {
    echo "O número $numero está fora do intervalo.";
}
?>