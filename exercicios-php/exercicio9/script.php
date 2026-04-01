<?php
include("index.php");
function media($v) {
    $arr = explode(",", $v);
    return array_sum($arr) / count($arr);
}
if ($_POST) echo "Média: " . media($_POST['v']);
?>