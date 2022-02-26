<?php
require_once __DIR__ . "/chap4_area.php";
$orders = [
["上底" , "$top"],
["下底" , "$bottom"],
["高さ" , "$height"],
["面積" , "$area"],
];
foreach ($msg as $msg) {
    $area = getPrice ($msg["cnt"]);
    create_msg ($msg , $area);
}
