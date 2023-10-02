<?php
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
    <h1>this is home page</h1>
    <form action="home_page.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>

<?php
    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"]."<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: 22-session.php");
    }
?>