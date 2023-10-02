<?php
    // session = SGB used to store information on a user to be used across
    //     multiple pages. a user is assigned a session-id ex..login data

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is login page</h1>

    <form action="22-session.php" method="post">
        <label>username</label><br>
        <input type="text" name="username"><br>
        <label>password</label><br>
        <input type="text" name="password"><br>
        <input type="submit" value="login" name="login">

    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){

        if(!empty($_POST["username"])&&!empty($_POST["password"])){
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["password"]=$_POST["password"];

            echo $_SESSION["username"]."<br>";
            echo $_SESSION["password"]."<br>";

            header("Location: home_page.php");
        }
        else{
            echo"username / password is missing <br>";
        }

    }

?>