<?php
    $massage = " Hello World , I'm a PHP developer.    ";
    echo strlen($massage).PHP_EOL;
    $massage = trim($massage," ,");
    $massage = ltrim($massage," ,");
    $massage = rtrim($massage," ,");
    echo $massage.PHP_EOL;
    echo strlen($massage).PHP_EOL;