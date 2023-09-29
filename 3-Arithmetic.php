<h1>Arthematic Operation</h1>
<?php
    //Arthematic Operation
    //+ - * / ** %
    $x=10;
    $y=3;
    $z=null;

    $z=$x+$y;
    echo "10+3= $z";
    echo "<br>";

    $z=$x-$y;
    echo "10-3=$z";
    echo "<br>";

    $z=$x*$y;
    echo "10*3=$z";
    echo "<br>";

    $z=$x/$y;
    echo "10/3=$z";
    echo "<br>";

    $z=$x%$y;
    echo "10%3=$z";
    echo "<br>";

    $z=$x**$y;
    echo "10**3=$z";
    echo "<br>";
?>
<h1>Increment & Decrement operators</h1>
<?php
    //Increment & Decrement operators
    //++ --

    $counter=10;
    echo "Value=$counter <br>";
    $counter++;
    echo "Increment=$counter";
    echo"<br>";

    $counter=10;
    $counter--;
    echo "Decrement=$counter";
    echo"<br>";

    $counter=10;
    $counter-=3;
    echo "Decrement 3=$counter";
    echo"<br>";

    $counter=10;
    $counter+=2;
    echo "increment 2=$counter";
    echo"<br>";
?>

<h1>Operator Precedence</h1>
<?php
    //Operator Precedence #The solving Order
    // ()
    // **
    // * / %
    // + -

    $total= 3 ** (1+2) - 1 * 3 / 2;
    echo $total;  

?>