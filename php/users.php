<?php

    session_start();

    include('../db_config/config.php');

    $select = mysqli_query($db, "SELECT * FROM users") or die(mysqli_error($db));

    $username = $_SESSION['username'];
    $user_id = $_SESSION['user_id'];
    $profile_pic = $_SESSION['user_img'];
    // $status = $_SESSION['status'];

    $output = '';

    if(mysqli_num_rows($select) === 1) {

        $output .= "No users to chat with";

    } elseif(mysqli_num_rows($select) > 0) {

        while($records = mysqli_fetch_array($select)) {
            $name = $records['firstname'] . " " . $records['lastname'];

            if($records['user_id'] != $user_id) {

                $status = ($records['status'] == "online") ? "online" :  "offline";

                $output .= '<a href="chat.php?id='.$records['user_id'].'" class="contact-card">
                                <div class="user-details">
                                    <div class="contact-details">
                                        <img src="../images/profile-pictures/'.$records['img'].'" alt="" class="profile-picture">
                                        
                                        <div class="name-message">
                                            <p class="username"> '.$name. '</p>
                                            <p class="message"></p>
                                        </div>
                                    </div>
                                    <div class="'.$status.' status"></div>
                                </div>
                            </a>';
            }
        }
    }

    echo $output;

?>