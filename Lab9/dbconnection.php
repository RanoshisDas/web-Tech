<?php
    $user="root";
    $pass="";
    $host="localhost";
    $database="BWU";

    $connect= mysqli_connect($host,$user,$pass,$database);

    if(mysqli_connect_errno()){
        echo "Connection Failed !";
    }
    else{
        echo "Connection Successful !";
    }

?>