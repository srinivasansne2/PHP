<?php
    $name="Srinivasan R";
    $phone="123-456-7890";

    //$name=strtolower($name);              //small
    //$name=strtoupper($name);              //caps
    //$name=trim($name);                    //remove unnessesor space
    //$name=str_pad($name,20,0);            //fixed length & fixing litter
    //$name=str_replace("-","/",$phone);    //to replase
    //$name=strrev($name);        //to reverse
    //$name=str_shuffle($name);   //to suffle
    //$name=strcmp($name,$phone); //using for compare two string
    //$name=strlen($name);        //find length
    //$name=strpos($phone,"-");     //finding ine posison
    //$name=substr($name,0,6);       //make name using start & end index


    echo "$name <br>";
    /*
    $fullname=explode(" ",$name);   //string to array
    foreach($fullname as $name){
        echo "$name<br>";
    }
    */

    $array=array("Srinivasan","R");

    $fullname=implode("-",$array);     //array to string
    echo "$fullname<br>";

    
?>