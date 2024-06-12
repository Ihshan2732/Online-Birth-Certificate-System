<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
            background-image: url('images/Baby.jpg');
            background-size: cover;
        }

        header {
            background-color: lightseagreen;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-evenly;
            align-items: center; 
            background-color: lightgoldenrodyellow;
            padding: 10px;
        }

        main {
            padding: 20px;
            text-align: left;
        }
        .intro-section {
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 20px;
        width: 50%;
        background-color: pink;
        }

        .box-model p {
        margin-bottom: 25px;
        line-height: 1.2;
        color:blue;
        
        
        }

        footer {
            background-color: yellowgreen;
            color: black;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
       
        <nav>
            <a href="about.php">About</a>
            <a href="parent_details.php">Parent Details</a>
            <a href="baby_details.php">Baby Details</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </nav>
    </header>

    <main>
        <h1>Welcome to Online Birth Certificate System</h1>
        <section class="intro-section">
            <h2>Introduction</h2>
            <div class="box-model">
                <p>Welcome to our website! We provide services for registering birth certificates online.</p>
                <p>Birth Babies refers to the precious and delicate infants who have recently entered the world. 
                These tiny individuals symbolize the beginning of life and embody the hopes and dreams of their families.</p>
                <p>Birth is a miraculous and transformative event, marking the commencement of a new chapter in the journey of parenthood. 
                Birth Babies bring immeasurable joy, love, and a sense of responsibility to those who welcome them, shaping the future with their innocence and potential.
                Each Birth Baby is a unique and remarkable addition to the tapestry of human existence, representing the beauty and fragility of life.</p>
            </div>
        </section>    
    </main>


    <footer>
        <p>&copy; 2023 Birth Babies | All rights reserved | Designed with love for the newest additions to our world</p>
    </footer>
</body>
</html>
