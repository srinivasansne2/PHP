<?php
    //array = holding multiple variable

    $foods=array("apple","orange","banana","cocoonut");
    //echo "$foods[0] <br>";

    //$foods[0]="pineapple";
    //array_push($foods,"cherry","staberry");
    //array_pop($foods);   //remove last element
    //array_shift($foods);  //remove first element
    echo count($foods)."<br>";

    foreach($foods as $food){
        echo $food."<br>";
    }
?>