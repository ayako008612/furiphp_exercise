<?php
function calc_area($top, $bottom, $height) {
    $msg = <<<EOM
var_dump("上底は？");
$top = trim (fgets(STDIN));
var_dump("下底は？");
$bottom = trim( fgets(STDIN));
var_dump("高さは？");
$height = trim( fgets(STDIN));
$msg = (($top + $bottom) * $height / 2);
var_dump("面積は".$msg); \n
EOM;
    echo $msg;
}

function display_msg($msg) {
    return $msg = (($top + $bottom) * $height / 2);
}