<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET&POST</title>
</head>
<body>
<h1>Login</h1>
    <form action="4-post_get.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username">
        <br>
        <label>Password</label><br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Log in">
    </form>
    <?php
        echo $_POST["username"];
        echo "<br>";
        echo $_POST["password"];
        echo "<hr>";
    ?>
</body>
</html>