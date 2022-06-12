<?php
    $string = "hello world";

    $stLength = strlen($string);
    for($i = 1; $i <= $stLength; $i++) {
        echo $string[$i * -1];
    }
    echo PHP_EOL;
    $stLength = strlen($string)-1;
    for($i = $stLength; $i >= 0; $i--) {
        echo $string[$i];
    }
    echo PHP_EOL;

    echo strrev($string);
