<?php

    session_start();

    include('../db_config/config.php');

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!empty($email) && !empty($password)) {

        $select = mysqli_query($db, "SELECT * FROM users WHERE email='{$email}' AND password='".md5($password)."' ");

        $result = mysqli_fetch_array($select);

        if(mysqli_num_rows($select) === 1) {

            $_SESSION['username'] = $result['firstname'] . " " . $result['lastname'];
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['user_img'] = $result['img'];
            $_SESSION['status'] = $result['status'];

            $id = mysqli_real_escape_string($db, $_SESSION['user_id']);

            $status = "online";
            $sql = mysqli_query($db, "UPDATE users SET status='{$status}' WHERE user_id={$id} ");

            echo "success";
        } else {
            echo "Invalid Email or Password";
        }

    } else {
        echo "All input fields are required";
    }

?>