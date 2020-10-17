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

function make_message_list(){
    $db = herokuConnect();
    $sql = "SELECT * FROM send_message";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $response;
}

function message_table($messages_list){
    $html = '<table>';
    $html .= '<tr><th>Name</th><th>Phone</th><th>E-Mail</th><th>Subject</th><th>Message</th></tr>';
    foreach($messages_list as $line_item){
        $html .= "<tr><td>" . $line_item['fullname'] . "</td><td>" . $line_item['form_phone'] . "</td><td>" . $line_item['form_email'] . "</td><td>" . $line_item['form_subject'] . "</td><td>" . $line_item['form_message'] . "</td></tr>";
    }
    $html .= '</table>';
    return $html;
}

?>

