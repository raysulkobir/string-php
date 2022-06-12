<?php
    $massage = "hello world, I am a student";

    $parts = str_split($massage);
    print_r($parts);
    
    echo "------------" . PHP_EOL;
    $parts2 = strtok($massage, " ");
    while($parts2 !== false) {
        echo $parts2 . PHP_EOL;
        $parts2 = strtok(" ");
    }

    echo "------------" . PHP_EOL;
    $parts3 = preg_split("/[\s,]+/", $massage);
    print_r($parts3);
 