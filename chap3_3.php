<?php
foreach (range (1,100) as $int);
    echo (" $int ") ;
if($int % 3 === 0) {
    var_dump ("Fizz");
}elseif ($int % 3 === 0 && $int % 5 === 0) {
    var_dump ("FizzBuzz");   
}else ($int % 5 === 0) {
    var_dump ("Buzz");
}
