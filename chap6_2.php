<?php
require_once __DIR__ . "/chap6_func.php";
$orders = [
["name" => "三浦" , "cnt"=> 6],
["name" => "高野" , "cnt"=> 8]
];
foreach ($orders as $order) {
    $price = get_price ($order["cnt"]);
    create_msg ($order["name"] , $price);
}
