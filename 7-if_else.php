<?php
    //if elseif else
    //logical operator && || !
    
    echo "<h2>Voter Eligiblity Check</h2>";
    $age=99;
    
    if ($age>=18 && $age<100 ){       //used && operator
        echo "Your eligible to vote";
    }
    elseif($age<=0){
        echo "Enter a valid age";
    }
    elseif($age>=100){
        echo "Verification Need";
    }
    else{
        echo "You are not eligible to vote";
    }
    echo "<hr>";
?>

<?php
    echo "<h2>Weather Check</h2>";
    $temp=15;
    $cloudy=false;

    if ($temp<0 || $temp>30){          //using || operatior
        echo "The weather is bad.<br>";
    }
    else{
        echo "The weather is good.<br>";
    }

    if(!$cloudy){                   //using ! operator
        echo "It is Sunny";
    }
    else{
        echo "It is cloudy";
    }
?>