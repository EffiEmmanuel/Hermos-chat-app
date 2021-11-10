<?php

    include('../db_config/config.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>HermosApp | Login</title>
</head>
<body>

    <div class="wrapper">

        <div class="signup-container">

            <h2>Login</h2>
            <p>Please fill the form fields below</p>

            <div class="error-msg">This is an error message</div>

            <form action="" method="post" autocomplete="off" class="login-form">

                <p>Email: <br> <input type="email" name="email" placeholder="abc@gmail.con" required></p>
                <p>Password: <br> <input type="password" name="password" placeholder="********" required></p>

                <input type="submit" name="login" value="Login" class="signup-login-btn" id="login-btn">
            </form>

            <p>Don't have an account? <a href="signup.php">Sign up</a></p>

        </div>

    </div>
    
    <script src="../javascript/login.js"></script>
</body>
</html>