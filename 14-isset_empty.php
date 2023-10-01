<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14-isset_empty.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">

    </form>
</body>
</html>
<?php
    //isset() =return true if a variable is declared & not null
    //empty() =return true if a variable is not declared, false,"", null

    //$username=null;
    //echo isset($username);
    /*
    foreach($_POST as $key => $value){
        echo "$key = $value <br>";
    }
    */
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
    }
        if(empty($username)){
        echo "Username is missing";
        }
        elseif(empty($password)){
            echo "Password is missing";
        }
        else{
            echo "Hello $username";
        }
?>