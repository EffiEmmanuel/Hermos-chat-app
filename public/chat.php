<?php

    include('../db_config/auth.php');

    page_protect();

    $user_id = $_SESSION['user_id'];

    $incoming_id = mysqli_real_escape_string($db, $_GET['id']);

    $select = mysqli_query($db, "SELECT * FROM users WHERE user_id='{$incoming_id}' ") or die(mysqli_error($db));

    if(mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);

        $incoming_username = $row['firstname'] . " " . $row['lastname'];
        $incoming_user_img = $row['img'];
        $incoming_user_status = $row['status'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://use.fontawesome.com/93e5d42d61.js"></script>
    <title>HermosApp | <?php echo $incoming_username ?> </title>
</head>
<body>

    <div class="chat-wrapper wrapper">

        <div class="chat-container">

            <div class="chat-nav">
                <div class="chat-header header">

                    <a href="users.php" class="back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

                    <div class="chat-user-details user-details">
                        <img src="../images/profile-pictures/<?php echo $incoming_user_img ?>" class="contact-profile-picture profile-picture">
                        
                        <div class="current-chat-details">
                            <p class="contact-username"> <?php echo $incoming_username ?> </p>
                            <p class="contact-status"> <?php echo $incoming_user_status ?> </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="chat-box"></div>


        </div>

        <form action="" method="post" autocomplete="off" class="message-form">

            <input type="text" name="incoming_id" value="<?php echo $incoming_id ?>" hidden >
            <input type="text" name="outgoing_id" value="<?php echo $user_id ?>" hidden>

            <div class="message-area">
                <input type="text" name="message" placeholder="Type a message here" class="chat-input">
                <i class="fa fa-paper-plane send-button" aria-hidden="true"></i>
            </div>

        </form>

    </div>
    

    <script src="../javascript/chat.js"></script>
</body>
</html>