<?php
    include "dbconnection.php";

    $userid = $_POST['userid'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM credential  WHERE userid = '$userid' AND password = '".md5($pass)."'";
    $result= mysqli_query($connect,$sql);

    if (mysqli_num_rows($result)==1) {
        echo ('<script>');
        echo ('alert("Login Successful.");');
        echo ('window.location="home.html";');
        echo ('</script>');
    } else {
        echo ('<script>');
        echo ('alert("Login Failed! Try again...");');
        echo ('window.location="login.php";');
        echo ('</script>');
    }

?>