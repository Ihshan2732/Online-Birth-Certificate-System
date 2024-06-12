<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background-image: url('images/Login_image.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        header {
            background-color: white;
            color: white;
            padding: 10px;
            text-align: left;
        }


        form {
            background-color: lightcoral;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 50px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .social-icons {
            text-align: right;
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 5px;
            color: #333;
            font-size: 20px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
    <nav>
            <a href="parent_details.php">Parent Details</a>&nbsp;&nbsp;&nbsp;
            <a href="baby_details.php">Baby Details</a>
        </nav>
    </header>
    
    <form action="process_login.php" method="post">
        <h2>Login</h2>
        <label for="username">Email:</label>
        <input type="text" id="username" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <p><a href="forgot_password.php">Forgot Password?</a></p>

    <!-- Social media icons -->
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    </form>
    
</body>
</html>
