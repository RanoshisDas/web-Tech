<!DOCTYPE html>
<html lang="en">
<head>
    <title>Largest Number</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Find the Largest Number</h1>
        <form method="POST">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <input type="number" name="num3" placeholder="Enter third number" required><br>
            <button type="submit">Find Largest</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            
            if ($num1 >= $num2 && $num1 >= $num3) {
                $largest = $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                $largest = $num2;
            } else {
                $largest = $num3;
            }
            
            echo "<p><strong>Largest Number:</strong> " . $largest . "</p>";
        }
        ?>
    </div>
</body>
</html>