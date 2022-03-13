<?php
require_once __DIR__ . "/chap4_area.php";
$orders = [
["top" => 10,"bottom" => 20,"height" => 30],
["top" => 40,"bottom" => 50,"height" => 60]
];
foreach($orders as $order){
    $area = calc_area ($order["cnt"]);
    create_msg ($order["top"."bottom"."height"],$area);
}
?>