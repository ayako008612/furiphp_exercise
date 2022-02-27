<?php
function calc_area($top, $bottom, $height) {
    $msg = <<<EOM
{$top}は？
{$bottom}は？
{$height}は？
{面積は} \n
EOM;
    echo $msg;
}

function display_msg($msg) {
    return $area =('$top'+ '$bottom') * '$height' / 2;
}