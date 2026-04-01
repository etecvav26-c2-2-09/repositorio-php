<?php
include("index.php");
if ($_POST) {
    $v = $_POST['valor'];
    if ($_POST['unidade'] == "C") {
        echo "$v °C = " . (($v * 9/5) + 32) . " °F";
    } else {
        echo "$v °F = " . round(($v - 32) * 5/9, 2) . " °C";
    }
}
?>