<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>what you like!</h1>
    <form action="16-checkbox.php" method="post">
        <input type="checkbox" name="Pizza">
        Pizza <br>
        <input type="checkbox" name="Hamburger">
        Hamburger <br>
        <input type="checkbox" name="Coke">
        Coke <br>
        <input type="checkbox" name="Donut">
        Donut <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["Pizza"])){
            echo "you like Pizza!<br>";
        }
        if(isset($_POST["Hamburger"])){
            echo "you like Hamburger!<br>";
        }
        if(isset($_POST["Coke"])){
            echo "you like Coke!<br>";
        }
        if(isset($_POST["Donut"])){
            echo "you like Donut!<br>";
        }
        if(empty($_POST["Pizza"])){
            echo "you don't like Pizza!<br>";
        }
        if(empty($_POST["Hamburger"])){
            echo "you don't like Hamburger!<br>";
        }
        if(empty($_POST["Coke"])){
            echo "you don't like Coke!<br>";
        }
        if(empty($_POST["Donut"])){
            echo "you don't like Donut!<br>";
        }
    }
?>