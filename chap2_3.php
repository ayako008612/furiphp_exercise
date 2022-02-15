<?php
var_dump("数学は？");
$score1 = trim (fgets(STDIN));
var_dump("国語は？");
$score2 = trim (fgets(STDIN));
if ($score1 >= 80  && $score2<= 100) {
    var_dump("合格です");  
}elseif ($score1 >= 49 && $score2 >= 0 ) {
    var_dump("追試です。");
}
if ($score1 >= 0 && $score2 <= 49) { 
    var_dump("不合格です。");
}
