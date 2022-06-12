<?php
    $string = "hello world";
    echo $string[0];
    echo PHP_EOL;
    echo substr($string, 0, 5);
    echo PHP_EOL;
    echo substr($string, -5);

    echo PHP_EOL;
    // new system
    $strLength = strlen($string);
    echo $strLength;
    echo PHP_EOL;
    echo substr($string, $strLength - 2);
    