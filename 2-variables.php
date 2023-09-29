<h1>Variables in PHP</h1>
<?php
    $name=" Srinivasan";
    $balance=299;
    $status=true;
    echo "Your Name $name <br>
    your balance is \$$balance <br>
    your account status is $status";
?>

<h2>Welcome to<?php echo $name;?></h2>

<?php
    //unset ($name);
    //echo $name;
    $name="Srinivasan";
    $age=19;
    $mark=99.9;
    $status=true;
    $value=null;
    //variable type check
    var_dump($name);
    var_dump($age);
    var_dump($mark);
    var_dump($status);
    var_dump($value);
?>
<br>
<h1>Sales</h1>
<?php
    $quantity=3;
    $price=4.5;
    $food="Rice";
    $total=null;
    echo"You ordered $quantity x $food";
    $total=$quantity*$price;
    echo " Your total is \$$total";
?>