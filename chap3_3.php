<?php
foreach (range(1, 100) as $int) 
    if ($int % 3 == 0 xor $int % 5 == 0) {
        echo ' Fizz ' . ' ';
    } elseif(!$int % 3 == 0 and $int % 5 == 0) {
        echo ' FizzBuzz ' . ' ';
    } elseif ($int % 5 == 0 xor $int % 3 == 0) { 
        echo ' Buzz ' . '';        
    } else {
        echo $int . ' ';
    }

