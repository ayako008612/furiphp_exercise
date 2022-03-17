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
function add($price){
    $sum = $price * 1.1;
    return $sum;
}
function total_tax($item1,$item2,$item3){
    $sum = $item1 + $item2 + $item3;
    return $sum;
    floor($sum * 1 / 10);
}
?>