<?php
include("index.php");
if ($_POST) {
    for ($i = 1; $i <= $_POST['n']; $i++) {
        for ($j = 1; $j <= $i; $j++) echo "$j ";
        echo "<br>";
    }
}
?>