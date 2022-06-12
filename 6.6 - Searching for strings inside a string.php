<?php
    $massage = "hello world, I am a student";
    // echo strpos($massage, "student") . PHP_EOL;
    $checkWord = strpos($massage, "hello");
    // $checkWord = strrpos($massage, "hello");

    if($checkWord !== false) {
        echo "Word found";
    }else{
        echo "Word not found";
    }

    
