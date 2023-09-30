

<form action="" method="post">
    <label>X</label>
    <input type="text" name="x">
    <br>
    <label>Y</label>
    <input type="text" name="y">
    <br>
    <label>Z</label>
    <input type="text" name="z">
    <br>

    <input type="submit" value="Total">

</form>

<?php
    $x=$_POST["x"];
    $y=$_POST["y"];
    $z=$_POST["z"];

    echo"<h2>X</h2>";

    $value=abs($x);  //Returns only +ve value
    echo"abs= $value";
    echo"<br>";

    $value=round($x);  //Round value
    echo"round= $value";
    echo"<br>";

    $value=floor($x);
    echo"floor= $value"; // round Low
    echo"<br>";

    $value=ceil($x); 
    echo"ceil=$value"; //round high
    echo"<br>";

    $value=sqrt($x);
    echo"sqrt=$value"; //squareroot
    echo"<br>";

    echo"<h2>X Y</h2>";

    $value=pow($x,$y);
    echo"pow=$value"; //power
    echo"<br>";

    echo"<h2>X Y Z</h2>";

    $value=max($x,$y,$z);
    echo"max=$value"; //maximum value
    echo"<br>";

    $value=min($x,$y,$z);
    echo"min=$value"; //minimum value
    echo"<br>";

    echo"<h2>To print random Number</h2>";
    $value=rand();
    echo"rand=$value";
    echo"<br>";

    $value=rand(1,6);
    echo"rand dies=$value";
    echo"<br>";

    $value=pi();
    echo"pi value=$value";
    echo"<br>";

?>