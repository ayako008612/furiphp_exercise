<?php
function display_msg($name,$price,$sum){ 
    $msg = <<<EOM
$name 様
ご注文承りました。
合計 $price 円です。
$sum 円（税込）になります。\n
EOM;
    echo $msg;
}  

function add($item1,$item2,$item3){
    $price = $item1 + $item2 + $item3;
    return $price;
}
function total_tax($price){
    $sum = $price * 1.1;
    return floor($sum);
}