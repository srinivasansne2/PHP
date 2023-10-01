<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="13-key_value2.php" method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php
    $capitals=array("india"=>"new delhi",
        "germany"=>"berlin",
        "spain"=>"madrid",
        "japan"=>"tokyo",
        "south korea"=>"seoul");

    $capital=$capitals[$_POST["country"]];
    echo "The capital is $capital";

?>