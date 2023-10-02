<?php
    // hashing = transforming sensitive data (password) into letter,
    //    number &/or symbols via mathamatical process.(simlar to encryption)
    //    hides the original data from 3rd party

    $password="sri123";

    $hash=password_hash($password,PASSWORD_DEFAULT);
    echo $hash."<br>";

    if(password_verify("sri123",$hash)){
        echo "you are loged in";
    }
    else{
        echo"Incorrect password";
    }
?>