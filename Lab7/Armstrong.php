<!DOCTYPE html>
<html lang="en">
<head>
    <title>Armstrong Number Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Armstrong Number Checker</h1>
        <form method="POST">
            <input type="number" name="number" placeholder="Enter a number" required>
            <button type="submit">Check</button>
        </form>
        <?php
        function isArmstrong($num) {
            $sum = 0;
            $digits = str_split($num);
            $power = count($digits);
            foreach ($digits as $digit) {
                $sum += pow($digit, $power);
            }
            return $sum == $num;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = (int) $_POST['number'];
            if (isArmstrong($number)) {
                echo "<p><strong>$number</strong> is an Armstrong number.</p>";
            } else {
                echo "<p><strong>$number</strong> is not an Armstrong number.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
