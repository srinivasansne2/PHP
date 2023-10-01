<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Filtering from unwanted </h1>
    <?php //<script>alert("Hello! I am an alert box!!");</script> ?>
    <form action="19-inp_filter.php" method="post">
        <label>username<br></label>
        <input type="text" name="username"><br>
        <label>age<br></label>
        <input type="text" name="age"><br>
        <label>Email<br></label>
        <input type="text" name="email"><br>

        <input type="submit" name="login" value="login">

    </form>

</body>
</html>

<?php
    if(isset($_POST["login"])){
        $username=filter_input(INPUT_POST,"username",
            FILTER_SANITIZE_SPECIAL_CHARS); // it filters spcl chr

        $age=filter_input(INPUT_POST,"age",
            FILTER_SANITIZE_NUMBER_INT); // it filters int only

        $email=filter_input(INPUT_POST,"email",
            FILTER_SANITIZE_EMAIL); // it filters int only
            
            
            echo "hello $username";
            echo "you $age years old";
            echo "youe email: $email ";
        }
?>