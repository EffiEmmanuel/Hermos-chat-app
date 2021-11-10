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
    <title>HermosApp | Sign Up</title>
</head>
<body>

    <div class="wrapper">

        <div class="signup-container">

            <h2>Sign Up</h2>
            <p>Please fill the form fields below</p>

            <div class="error-msg">This is an error message</div>

            <form action="" method="post" autocomplete="off" class="signup-form">

                <div class="names">
                    <p>Firstname: <br> <input type="text" name="fname" placeholder="Firstname" required></p>
                    <p>Lastname: <br> <input type="text" name="lname" placeholder="Lastname" required></p>
                </div>

                <p>Email: <br> <input type="email" name="email" placeholder="abc@gmail.con" required></p>
                <p>Password: <br> <input type="password" name="password" placeholder="********" required></p>

                <input type="file" accept="image/*" name="profile-pic">

                <input type="submit" name="signup" value="Sign up" class="signup-login-btn" id="signup-btn">
            </form>

            <p>Already have an account? <a href="login.php">Log in</a></p>

        </div>

    </div>
    

    <script src="../javascript/signup.js"></script>
</body>
</html>