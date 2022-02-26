<?php
function calc_area($top, $bottom, $height) {
    $msg = <<<EOM
var_dump("上底 : ");
$top = trim (fgets(STDIN));
var_dump ("下底 : ");
$bottom = trim( fgets(STDIN));
var_dump ("高さ : ");
$height = trim( fgets(STDIN)); 
var_dump ("面積 : "); \n
EOM;
    echo $msg;
}

function display_msg($msg) {
    return $area =('$top'+ '$bottom') * '$height' / 2;
}