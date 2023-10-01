<?php
    //associative array = an array made of key value pairs

    $capitals=array("india"=>"new delhi",
        "germany"=>"berlin",
        "spain"=>"madrid",
        "japan"=>"tokyo",
        "south korea"=>"seoul");

        //echo $capitals["japan"];
        $capitals["india"]="delhi";
        $capitals["italy"]="rome";
        echo count($capitals);
        echo "<br>";
        
        foreach($capitals as $key => $value){
            echo "$key = $value <br>";
        }

        array_shift($capitals);
        
        $keys=array_keys($capitals);  //can get keys or values
        foreach ($keys as $key){
            echo "$key <br>";
        }
?>