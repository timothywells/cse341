<?php
session_start();
require_once 'library/connections.php';
require_once 'library/functions.php';
//require_once 'library/sessionData.php';

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
                    $_SESSION['registered'] = true; //Only things changed
                    $reg_message = "Registration Successful";
                    include 'index.php?action=confirm_register';
                } else {
                    $reg_message = "Registration was NOT Successful";
                    include 'view/register.php';
                }
            break;
        //

        //Confirm Registreation
            case 'confirm_register':
                if(isset($_SESSION['registered'])){
                    if($_SESSION['registered'] == false){
                        $reg_message = "Registration was NOT Successful";
                        include 'view/register.php';
                    }
                    $customerData = get_cust_profile($customerId); //Refers to get_cust_profile in functions.php
                    $_SESSION['customerid'] = $customerData['customerid'];
                    $_SESSION['username'] = $customerData['username'];
                    $_SESSION['email'] = $customerData['email'];
                    $_SESSION['fname'] = $customerData['fname'];
                    $_SESSION['lname'] = $customerData['lname'];
                    $_SESSION['street_address'] = $customerData['street_address'];
                    $_SESSION['c_city'] = $customerData['c_city'];
                    $_SESSION['c_state'] = $customerData['c_state'];
                    $_SESSION['zip'] = $customerData['zip'];
                    $_SESSION['phone'] = $customerData['phone'];
                    $_SESSION['clearance'] = $customerData['clearance'];
                    $_SESSION['loggedIn'] = true;
                    include 'view/confirm_register.php';
                } else {
                    $reg_message = "Registration was NOT Successful";
                    include 'view/register.php';
                }
            break;
        //

    /******************** LOGGING IN ********************/
        //Login view
            case 'login':
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
                    $login_fail_message = "Sign In Failed";
                    include 'view/login.php';
                    exit;
                }
                $customerData = get_cust_profile($customerId); //Refers to get_cust_profile in functions.php
                $_SESSION['customerid'] = $customerData['customerid'];
                $_SESSION['username'] = $customerData['username'];
                $_SESSION['email'] = $customerData['email'];
                $_SESSION['fname'] = $customerData['fname'];
                $_SESSION['lname'] = $customerData['lname'];
                $_SESSION['street_address'] = $customerData['street_address'];
                $_SESSION['c_city'] = $customerData['c_city'];
                $_SESSION['c_state'] = $customerData['c_state'];
                $_SESSION['zip'] = $customerData['zip'];
                $_SESSION['phone'] = $customerData['phone'];
                $_SESSION['clearance'] = $customerData['clearance'];
                $_SESSION['loggedIn'] = true;
                // if ($_SESSION['clearance'] == false){
                //     include 'view/profile.php';
                // } else {
                //     include 'index.php?action=admin';
                // }
                // if ($customerData['clearance'] == false || isset($customerData['clearance']) == false){
                //     include 'view/profile.php';
                // break;
                // }
                include 'view/profile.php';
            break;
            
        //

        //Log out
            case 'log_out':
                session_unset();
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
            login_check();
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
            $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
            $street_address = filter_input(INPUT_POST, 'street_address', FILTER_SANITIZE_STRING);
            $c_city = filter_input(INPUT_POST, 'c_city', FILTER_SANITIZE_STRING);
            $c_state = filter_input(INPUT_POST, 'c_state', FILTER_SANITIZE_STRING);
            $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            $customerId = $_SESSION['customerid']; //Add to customerSession(); function
            update_cust_profile ($customerId,$email,$fname,$lname,$street_address,$c_city,$c_state,$zip,$phone);
            $customerData = get_cust_profile($customerId); //Refers to get_cust_profile in functions.php
            $_SESSION['email'] = $customerData['email'];
            $_SESSION['fname'] = $customerData['fname'];
            $_SESSION['lname'] = $customerData['lname'];
            $_SESSION['street_address'] = $customerData['street_address'];
            $_SESSION['c_city'] = $customerData['c_city'];
            $_SESSION['c_state'] = $customerData['c_state'];
            $_SESSION['zip'] = $customerData['zip'];
            $_SESSION['phone'] = $customerData['phone'];
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
            $profile_del_message = "Profile Deleted";
            include 'view/admin.php';
        break;  
    //

    //Delete Messages
        case 'delete_message':
            //Add content variables here
            $messageID = $_GET['get_message_by_id'];
            delete_message($messageID);
            $message_del_message = "Message Deleted";
            include 'view/confirm_message_delete.php';
        break;
    //

    //Admin Delete Review    
        case 'admin_delete_review':
            $reviewID = $_GET['get_review_by_id'];
            admin_delete_review($reviewID);
            $review_del_message = "Review Deleted";
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
