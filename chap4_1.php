<?php
require_once __DIR__ . "/chap4_area.php";
$orders = [
["上底は？" , "$top" , "cnt" => 10],
["下底は？" , "$bottom" , "cnt" => 15],
["高さは？" , "$height" , "cnt" => 20],
["面積は , ", "$area" , "cnt" => 250],
];
foreach ($msg as $msg) {
    $area = create_msg ($msg , $area);
    create_msg ($msg , $area);
}
