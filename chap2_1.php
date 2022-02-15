<?php
var_dump("年齢は？");
$age = trim (fgets(STDIN));
if ($age < 20) {
    var_dump("あなたは未成人です");
}elseif ($age < 21) {
    var_dump("成人式ですね、おめでとうございます！");
}if ($age > 20) {
    var_dump("成人です");  
}
