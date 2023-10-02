<?php
    include("25-conn_db.php");  //we include the DB using thos previous file 

    $username="jan1";
    $password="qwert123";
    $hash=password_hash($password,PASSWORD_DEFAULT);

    $sql="INSERT INTO users (user,password)
            VALUES('$username','$hash')";

    try{
        mysqli_query($conn,$sql);
        echo "User is now registered";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user";
    }
    
    mysqli_close($conn);
?>