<?php
require_once __DIR__ . "/chap4_price.php";
$sum = add($item1,$item2,$item3);
display_msg($item1,$item2,$item3,$sum);

$price = total_tax($item1,$item2,$item3);
display_msg($item1,$item2,$item3,$sum);
?>