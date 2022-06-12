<?php

    $name = "Mateusz";
    // $string = 'My name is $name'; not return in this variable
    $string = "My name is $name";
    echo $string;

    echo "_________".PHP_EOL;
    $fName = "Md.Raysul";
    $string2 = <<<EOD
        hello
        world
        I am $fName
    EOD;

    echo $string2;
    

