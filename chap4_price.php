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
create_msg($name); 

function add($price,$item1,$item2,$item3){
    $sum = $price + (($item1 + $item2 + $item3) * 0.1);
    return $sum ;
}
function total_tax($item1,$item2,$item3){
    $price = $item1 + $item2 + $item3;
    return $price;
}
?>