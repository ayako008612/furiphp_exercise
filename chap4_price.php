<?php
var_dump("お名前は？");
$name = trim (fgets(STDIN));
var_dump("1つ目の金額を入力");
$item1 = trim( fgets(STDIN));
var_dump("2つ目の金額を入力");
$item2 = trim( fgets(STDIN));
var_dump("3つ目の金額を入力");
$item3 = trim( fgets(STDIN));

function display_msg($name,$price,$sum){ 
    $msg = <<<EOM
$name 様
ご注文承りました。
合計 $price 円です。
$sum 円（税込）になります。\n
EOM;
    echo $msg;
}
function add($item1, $item2,$item3) {;
    $price = ($item1 + $item2 + $item3);
    return $price ;
}
function total_tax($item1,$item2,$item3) {
    $sum = ($item1 + $item2 + $item3) * 1 / 10;
    return  floor($sum) ;
}
?>