<?php
    $host = "localhost";
    $user = "danyou124";
    $pass = "Plant13!"; 
    $db = "danyou124";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");
    
    // if(mysqli_connect_errno()){
    //     echo "Database Connect False";
    // } else {
    //     echo "Database Connect True";
    // }
?>