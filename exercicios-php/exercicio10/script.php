<?php
include("index.php");
if ($_POST) {
    $a = $_POST['ano'];
    $check = ($a % 400 == 0 || ($a % 4 == 0 && $a % 100 != 0));
    echo $check ? "É bissexto" : "Não é bissexto";
}
?>