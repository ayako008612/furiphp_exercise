<?php
var_dump("数学は？");
$score1 = trim (fgets(STDIN));
var_dump("国語は？");
$score2 = trim (fgets(STDIN));
if ($score1 >= 80 && $score2 >= 80) {
    var_dump("合格です");  
}elseif ($score1 >= 50 or $score2 >= 50) {
    var_dump("追試です。");
}else {
    var_dump("不合格です。");
}
