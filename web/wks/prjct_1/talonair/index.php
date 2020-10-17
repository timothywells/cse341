<?php
require_once 'library/connections.php';
require_once 'library/functions.php';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL){
      $action = 'home';
  }
 }

switch ($action){
    case 'home':
        include 'view/home.php';
    case 'send_message':
        $fullname=$_POST['fullname'];
        $form_phone=$_POST['form_phone'];
        $form_email=$_POST['form_emal'];
        $form_subject=$_POST['form_subject'];
        $form_message=$_POST['form_message'];
        form_record($fullname, $form_phone, $form_email, $form_subject, $form_message);
    default:
        include 'view/home.php';
}


?>
