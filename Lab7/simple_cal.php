<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Simple Calculator</h1>
        <form method="POST">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <select name="operation">
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
            </select>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            
            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        break;
                    case "divide":
                        $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
                        break;
                    default:
                        $result = "Invalid operation";
                }
                echo "<h2>Result: $result</h2>";
            } else {
                echo "<h2>Please enter valid numbers.</h2>";
            }
        }
        ?>
    </div>
</body>
</html>
