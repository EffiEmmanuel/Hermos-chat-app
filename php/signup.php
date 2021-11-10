<?php

    include('../db_config/config.php');

    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']); 
    $profile_pic = $_FILES['profile-pic']; 
    $status = "offline";

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($profile_pic)) {

        $select = mysqli_query($db, "SELECT * FROM users WHERE email='{$email}' ");

        if(mysqli_num_rows($select) === 1) {
            echo "Email Already Exists!";
        } else {

            $img_name = $_FILES['profile-pic']['name'];
            $temp_name = $_FILES['profile-pic']['tmp_name'];

            $time = time();

            $new_img_name = $time.$img_name;

            move_uploaded_file($temp_name, "../images/profile-pictures/".$new_img_name);

            $insert = mysqli_query($db, "INSERT INTO users VALUES(NULL, '".$fname."', '".$lname."', '".$email."', '".md5($password)."', '".$new_img_name."', '".$status."')") or die(mysqli_error($db));

            echo "success";
        }
    } else {
        echo "All input fields are required";
    }

?>