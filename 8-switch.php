<?php
    //switch =Replacement of ifelse, more efficent & less code
    echo "<h1>Grade check</h1>";
    $grade="asdf";

    switch($grade){
        case "A";
            echo "you did great";
            break;
        case "B";
            echo "you did good";
            break;
        case "C";
            echo "you did not bad";
            break;
        case "D";
            echo "you did poor";
            break;
        case "F";
            echo "you did fail";
            break;
        default;
            echo "$grade is not valid";
    }
?>