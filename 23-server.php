<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <label>username</label>
    <input type="text" name="username">
    <input type="submit">
    </form>
</body>
</html>

<?php
    // $_SERVER = SGB that contains header, paths & script location
    //    the entires in this array are created by web server,shows nearly 
    //    everything you need to know about the current web page environment

    foreach($_SERVER as $key => $value){
        echo "$key = $value <br>";
    }
?>