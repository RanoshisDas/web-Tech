<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sarvey</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: left;
        }
        h1 {
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
            justify-self: center;
        }
        label {
            font-size: 1rem;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }
    </style>
</head>
<body>
    <div>
        <h1>Take the Survey</h1>
        <form action="output/survey_output.php" method="POST">
            <label for="user">Name:</label>
            <input type="text" name="user" id="user" required><br>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required min="18" max="100"><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
