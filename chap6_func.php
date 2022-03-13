<?php
function create_msg($name, $price) {
    $msg = <<<EOM
{$name}様
ご注文をたまわりました。
合計{$price}円です。\n
EOM;
    echo $msg;
}

function get_price($cnt) {
    return 500 * $cnt;
}
