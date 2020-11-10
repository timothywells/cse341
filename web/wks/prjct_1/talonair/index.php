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

/******************** INDEX SWITCHING INFORMATION ********************/
switch ($action){
    case 'home':
        include 'view/home.php';
    break;

    /******************** SEND MESSAGE FROM HOME SCREEN INFORMATION ********************/
        //Collect Message information send information to MESSAGE_RECORD in FUNCTIONS.PHP
            case 'send_message':
                    $fullname=$_POST['fullname'];
                    $form_phone=$_POST['form_phone'];
                    $form_email=$_POST['form_email'];
                    $form_subject=$_POST['form_subject'];
                    $form_message=$_POST['form_message'];
                    message_record($fullname, $form_phone, $form_email, $form_subject, $form_message);
                    include 'view/confirm_message_sent.php';
            break;
        //

    /******************** REGISTRATION INFORMATION ********************/
        //Registration Form
            case 'register':
                include 'view/register.php';
            break;
        //

        //Sends Registered information to server
            case 'registered':
                $username=filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $confirm_register = register($email,$username,$hashed_password);
                if($confirm_register){
                    $reg_message = "Registration Successful";
                    include 'view/confirm_register.php';
                } else {
                    $reg_message = "Registration was NOT Successful";
                    include 'view/register.php';
                }
            break;
        //

        //Confirm Registreation
            case 'confirm_register':
                include 'view/confirm_register.php';
            break;
        //

    /******************** LOGGING IN ********************/
        //Login view
            case 'login':
                //Add content variables here
                include 'view/login.php';
            break;
        //

        //Goinng to Profile AFTER logging in and creates a SESSION
            case 'login_user':
                $customerId = '';
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $customerId = signInUser($email, $password); //Refers to signInUser in functions.php
                if ($customerId == false || isset($customerId) == false) {
                    $sign_fail_message = "Sign In Failed";
                    include $_SERVER['DOCUMENT_ROOT'] . "view/login.php";
                    exit;
                }
                $customerData = get_cust_profile($customerId); //Refers to get_cust_profile in functions.php
                $_SESSION['customerSessionData'] = $customerData;
                $_SESSION['username'] = $customerData['username'];
                $_SESSION['email'] = $email;
                $_SESSION['userId'] = $customerId; //what does this refer to
                $_SESSION['loggedIn'] = true;
                include 'view/profile.php';
            break;
        //

        //Log out
            case 'log_out':
                //$_SESSION['loggedIn'] = false;
                // remove all session variables
                session_unset();

                // destroy the session
                session_destroy(); 
                include 'view/home.php';
            break;
        //

    /******************** CUSTOMER PROFILE ********************/
    //Change Profile VIew
        case 'change_profile':
            include 'view/change_profile.php';
        break;
    //

    //Update the profile information based on customerid
        case 'update_profile';
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            echo $email . '<br>';
            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
            echo $fname . '<br>';
            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
            echo $lname . '<br>';
            $street_address = filter_input(INPUT_POST, 'street_address', FILTER_SANITIZE_STRING);
            echo $street_address . '<br>';
            $c_city = filter_input(INPUT_POST, 'c_city', FILTER_SANITIZE_STRING);
            echo $c_city . '<br>';
            $c_state = filter_input(INPUT_POST, 'c_state', FILTER_SANITIZE_STRING);
            echo $c_state . '<br>';
            $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
            echo $zip . '<br>';
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            echo $phone . '<br>';
            update_cust_profile ($email,$fname,$lname,$street_address,$c_city,$c_state,$zip,$phone);
            include 'view/profile.php';
            break;
        //

    //Change Password View
        case 'change_password':
            include 'view/change_password.php';
        break;
    
    //Update Password
        case 'password_update':

            include 'view/profile.php';
        break;
    //

    //Write a review view
        case 'write_review':
            include 'view/write_review.php';
        break;
    //

    //Confirm Review
        case 'confirm_review':
            $fullName=['fname' . 'lname'];
            $reviewDate=['date'];
            $form_subject=$_POST['subject'];
            $form_message=$_POST['review'];
            review_record($fullname, $phone, $email, $subject, $message);
            include 'view/confirm_write_review.php';
        break;
    //

    //Delete Review
        case 'cust_delete_review':

        break;
    //

    //Profile View
        case 'profile':
            include 'view/profile.php';
        break;
    //

    /******************** ADMINISTRATION INFORMATION ********************/
    //Admin Profile with Messages, Reviews and Customer Infromation
        case 'admin':
            //Add content variables here
            $messages_list = get_message_list();
            $message_table = message_table($messages_list);
            $admin_get_reviews = get_reviews();
            $admin_reviews_table = admin_reviews_table($admin_get_reviews);
            $get_profiles = get_profile();
            $profiles_table = profiles_table($get_profiles);
            include 'view/admin.php';
        break;
    //
    
    //Delete profile from customer list
        case 'delete_profile':
            //Add content variables here
            $deleteCustomer = $_GET['get_customer_id'];
            delete_cust_profile($deleteCustomer); //Referes to functions.php
            include 'view/confirm_delete_profile.php';
        break;  
    //

    //Delete Messages
        case 'delete_message':
            //Add content variables here
            $messageID = $_GET['get_message_by_id'];
            delete_message($messageID);
            include 'view/confirm_message_delete.php';
        break;
    //

    //Admin Delete Review    
        case 'admin_delete_review':
            $reviewID = $_GET['get_review_by_id'];
            admin_delete_review($reviewID);
            include 'view/admin_confirm_review_delete.php';
        break;
    //

    /******************** REVIEWS ********************/
    //Reviews Page
        case 'reviews':
            //Add content variables here
            $get_reviews = get_reviews();
            $admin_reviews = reviews_table($get_reviews);
            include 'view/reviews.php';
        break;




    /******************** OTHER VIEWS ********************/

    //404 - Page not Found
        case '404.php':
            //Add content variables here
            include '404.php';
        break;
    //

    //About Talon Air
        case 'about':
            //Add content variables here
            include 'view/about.php';
        break;
    //

    //Services Provided by Talon Air
        case 'services':
            //Add content variables here
            include 'view/services.php';
        break;
    //

    //Default Home
        default:
            include 'view/home.php';
        break;
    //

    /******************** DEPRECIATED ********************/
    //View Messages
        // case 'view_messages':
        //     //Add content variables here
        //     $messages_list = get_message_list();
        //     $message_table = message_table($messages_list);
        //     include 'view/messages.php';
        // break;

        

    }
?>
