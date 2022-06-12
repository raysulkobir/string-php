<?php
    $person = "John Doe, 0176002508";
    // $parts = sscanf($person, "%s %s");
    $parts = sscanf($person, "%s %s", $firstName, $lastName);
    echo $firstName;

    echo "___________".PHP_EOL;
    $hexColor = "#FFFFFF";
    $parts = sscanf($hexColor, "#%x%x%x", $red);
    echo $red;
