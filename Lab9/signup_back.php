<?php
    include "dbconnection.php";

    $name = $_POST['name'];
    $userid = $_POST['userid'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];

    if($pass != $pass2){
        echo ('<script>');
        echo ('alert("Password and re-enter password must be same. Try again...");');
        echo ('window.location="signup.php";');
        echo ('</script>');
        exit;
    }else{

    $sql = "INSERT INTO credential  VALUES ('$userid', '$name','".md5($pass)."')";

    if (mysqli_query($connect,$sql)) {
        echo ('<script>');
        echo ('alert("Data insertion is Successful.");');
        echo ('window.location="login.php";');
        echo ('</script>');
    } else {
        echo ('<script>');
        echo ('alert("Data insertion is Failed! Try again...");');
        echo ('window.location="signup.php";');
        echo ('</script>');
    }
}
?>