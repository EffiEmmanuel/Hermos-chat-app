<?php

    include('../db_config/auth.php');

    $outgoing_id = mysqli_real_escape_string($db, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($db, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($db, $_POST['message']);


    if(!empty($message)) {
        $insert = mysqli_query($db, "INSERT INTO messages VALUES(NULL, {$incoming_id}, {$outgoing_id}, '{$message}')") or die(mysqli_error($db));
    }

?>