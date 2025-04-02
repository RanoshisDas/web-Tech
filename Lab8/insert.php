<?php
    include "dbconnection.php";

    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $sec = $_POST['sec'];
    $address = $_POST['add'];

    $sql = "INSERT INTO btechds  VALUES ('$roll', '$name', '$sec', '$phone', '$address')";

    if (mysqli_query($connect,$sql)) {
        echo ('<script>');
        echo ('alert("Data insertion is Successful.");');
        echo ('window.location="form.php";');
        echo ('</script>');
    } else {
        echo ('<script>');
        echo ('alert("Data insertion is Failed! Try again...");');
        echo ('window.location="form.php";');
        echo ('</script>');
    }
?>
