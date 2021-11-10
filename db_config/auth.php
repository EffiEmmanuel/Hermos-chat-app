<?php

    session_start();

    include('config.php');


    function page_protect() {
        if(!isset($_SESSION['username']) && !isset($_SESSION['user_id'])) {

            // $message = "Please login to continue";
            // header('location:../public/login.php?message=$message');

            header('location:login.php');

        }
    }

?>