<!DOCTYPE html>
<html lang="en">
<head>
    <title>Survey Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 1.5rem;
        }
        p {
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['user']);
            $age = (int) $_POST['age'];
            $email = htmlspecialchars($_POST['email']);
            
            echo "<h1>Survey Submission</h1>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Age:</strong> " . $age . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
        } else {
            echo "<p>No data received.</p>";
        }
        ?>
    </div>
</body>
</html>