<?php

    include('../db_config/auth.php');

    page_protect();

    // $username = $_SESSION['username'];
    // $profile_pic = $_SESSION['user_img'];
    $user_id = $_SESSION['user_id'];

    $select = mysqli_query($db, "SELECT * FROM users WHERE user_id='{$user_id}' ") or die(mysqli_error($db));

    if(mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_array($select);

        $current_username = $row['firstname'] . " " . $row['lastname'];
        $current_user_id = $row['user_id'];
        $current_user_img = $row['img'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>HermosApp | <?php echo $current_username ?> </title>
</head>
<body>

    <div class="wrapper">

        <div class="users-container">

            <div class="header">

                <div class="user-details">
                    <img src="../images/profile-pictures/<?php echo $current_user_img ?>" alt="" class="profile-picture">
                    <p class="user-name"> <?php echo $current_username ?> </p>
                </div>

                <a href="../php/logout.php?logout_id=<?php echo $current_user_id ?>" class="button logout">Logout</a>
            </div>

            <h3>Chat</h3>

            <div class="users-list"></div>

        </div>

    </div>
    
    <script src="../javascript/users.js"></script>
    <script src="../javascript/logout.js"></script>
</body>
</html>