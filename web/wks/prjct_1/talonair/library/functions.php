<?php

function form_record($fullname, $form_phone, $form_email, $form_subject, $form_message){
    $db = herokuConnect();
    $sql = "INSERT INTO send_message(
        fullname, form_phone, form_email, form_subject, form_message
    ) VALUES ('$fullname','$form_phone','$form_email','$form_subject','$form_message')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->closeCursor();
}

?>

