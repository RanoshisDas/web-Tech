<!DOCTYPE html>
<html lang="en">
<head>
    <title>Age Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Age Calculator</h1>
        <form method="POST">
            <label for="dob">Enter your Date of Birth:</label>
            <input type="date" name="dob" id="dob" required>
            <button type="submit">Calculate Age</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dob = $_POST['dob'];
            $dobObject = new DateTime($dob);
            $currentDate = new DateTime();
            $year = $dobObject->diff($currentDate)->y;
            $month = $dobObject->diff($currentDate)->m;
            $day = $dobObject->diff($currentDate)->d;
            echo "<p>Your Age: <strong>" . $year . " </strong>years <strong>". $month . "</strong> Months <strong> ". $day . "</strong> days</p>";
            
        }
        ?>
    </div>
</body>
</html>
