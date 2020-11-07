<?php
session_start();
require_once 'library/connections.php';
require_once 'library/functions.php';


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL){
      $action = 'home';
  }
 }

//Actions
switch ($action){
    case 'home':
        include 'view/home.php';
    break;

//Success Delete Messages
    case 'delete_message':
        //Add content variables here
        $messageID = $_GET['messageID'];
        delete_message($messageID);
        include 'view/confirm_delete.php';
    break;

//Send Message
    case 'send_message':
        $fullname=$_POST['fullname'];
        $form_phone=$_POST['form_phone'];
        $form_email=$_POST['form_email'];
        $form_subject=$_POST['form_subject'];
        $form_message=$_POST['form_message'];
        form_record($fullname, $form_phone, $form_email, $form_subject, $form_message);
        include 'view/confirm_message_sent.php';
    break;

//Register account
    case 'register':
        //Add content variables here
        include 'view/register.php';
    break;

//confirm Registration
case 'confirm_register':
        //Add content variables here
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $confirm_register = register($email,$username,$hased_password);
        if($confirm_register){
            $reg_message = "Registration Successful";
            include 'view/confirm_register.php';
        } else {
            $reg_message = "Registration was NOT Successful";
            include 'view/register.php';
        }

        //confirm passwrod
        
    break;
//Login    
    case 'login':
        //Add content variables here
        $username=$_POST['username'];
        $password=$_POST['password'];
        include 'view/login.php';
    break;

    case 'profile':
        $cust_profle = cust_profile();
        $cust_review = cust_review();
        $username=$_POST['username'];
        $password=$_POST['password'];
        $passwordConfirm=$_POST['passwordConfirm'];
        include 'view/profile.php';
    break;

    case 'change_profile':

    break;
//Admin Delete Profile
    case 'delete_profile':
        //Add content variables here
        $customerID = $_GET['customerID'];
        delete_message($customerID);
        include 'view/confirm_profile_delete.php';
    break;  

//Views Returned    
    case 'view_messages':
        //Add content variables here
        $messages_list = make_message_list();
        $message_table = message_table($messages_list);
        include 'view/messages.php';
    break;

    case '404.php':
        //Add content variables here
        include '404.php';
    break;

    case 'about':
        //Add content variables here
        include 'view/about.php';
    break;

    case 'admin':
        //Add content variables here
        include 'view/admin.php';
    break;
    
    case 'change_profile':
        //Add content variables here
        include 'change_profile.php';
    break;

    case 'profile_changed':

        include 'profile_changed.php';
    break;

    case 'confirm_delete':
        //Add content variables here
        include 'confirm_delete.php';
    break;

    case 'write_review':
        $fullname=$_POST['fullname'];
        $form_phone=$_POST['phone'];
        $form_email=$_POST['email'];
        $form_subject=$_POST['subject'];
        $form_message=$_POST['message'];
        review_record($fullname, $phone, $email, $subject, $message);
        include 'write_review.php';
    break;

    case 'services':
        //Add content variables here
        include 'view/services.php';
    break;

    case 'reviews':
        //Add content variables here
        include 'view/reviews.php';
    break;

    default:
        include 'view/home.php';
    break;
}


?>
