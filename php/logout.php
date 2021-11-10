<?php

    session_start();

    if(isset($_SESSION['user_id'])) { //if the user is logged in

        include('../db_config/config.php');

        //Get the login id
        $logout_id = mysqli_real_escape_string($db, $_GET['logout_id']);

        if(isset($logout_id)) {
            $status = "offline";

            $sql = mysqli_query($db, "UPDATE users SET status='{$status}' WHERE user_id={$logout_id} ");

            if($sql) {
                session_unset();
                session_destroy();
                header('location:../public/login.php');
            }
        } else {
            header('location:../public/login.php');
        }

    } else {
        header('location:../public/login.php');
    }




?>