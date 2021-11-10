<?php

    include('../db_config/auth.php');

    $outgoing_id = mysqli_real_escape_string($db, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($db, $_POST['incoming_id']);
   

    $output = "";

    $sql = "SELECT * FROM messages 
            LEFT JOIN users ON users.user_id = messages.outgoing_id
            WHERE (outgoing_id={$outgoing_id} AND incoming_id={$incoming_id}) OR (incoming_id={$outgoing_id} AND outgoing_id={$incoming_id}) ORDER BY message_id ASC";

    $select = mysqli_query($db, $sql) or die(mysqli_error($db));

    if(mysqli_num_rows($select) > 0) {
        
        while($row = mysqli_fetch_array($select)) {

            if($row['outgoing_id'] == $outgoing_id) { //If the current user is the sender

                
                $output .= '<div class="outgoing-chat-bubble"><p>'. $row['message'] . '</p></div>';

            } else { //If the current user is a receiver

                $output .= '<div class="incoming">
                                <img src="../images/profile-pictures/'.$row['img'].'" alt="" class="incoming-img">

                                <p class="incoming-chat-bubble">' . $row['message'] . '</p>
                            </div>';

            }

        }

    }
    
    echo $output;

?>