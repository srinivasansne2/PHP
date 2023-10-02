<?php
    // cookie = informaton about a user stored in a users browser for
    //    targeted ad,browsing priference & other non-sensitive data.

    setcookie("fav_food","pizza",time()+(86400*2),"/");
    setcookie("fav_drink","coke",time()+(86400*2),"/");
    setcookie("fav_dessert","ice cream",time()+(86400*2),"/");

    foreach($_COOKIE as $key => $value){
        echo "$key = $value <br>";
    }
    echo"<hr>";

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "I dont know your favorite food";
    }
    
?>