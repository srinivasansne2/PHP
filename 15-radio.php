<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button to cc selection</title>
</head>
<body>
    <h1>credit card</h1>
    <form action="15-radio.php" method="post">
        <input type="radio" name="cc" value="Visa">
        Visa <br>
        <input type="radio" name="cc" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="cc" value="Rupay">
        Rupay <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){

        if(isset($_POST["cc"])){
            $cc=$_POST["cc"];
            echo "you selected $cc credit card";
        }
        else{
            echo "Please select a credit card";
        }
    }
?>