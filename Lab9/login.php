<html>
<head>
    <title>Login Page</title>
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
            width: 500px;
            text-align: center;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #45a049;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select{
            width: 50%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            font-size: 1rem;
            box-sizing: border-box;
        }
        h1 {
            color: #333;
            font-size: 1.5rem;
        }
        p {
            font-size: 1rem;
            color: #555;
        }


        /* extra css above all css common css */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 450px;
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
    <div class="container">
        <h1> Sign up Form</h1>
        <form action="login_back.php" method="post">

            <label for="userid">User id:</label> 
            <input type="text" name="userid" required><br>

            <label for="password">Password:</label> 
            <input type="password" name="password" required><br>

            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>