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
//Send Message
    case 'send_message':
            $fullname=$_POST['fullname'];
            $form_phone=$_POST['form_phone'];
            $form_email=$_POST['form_email'];
            $form_subject=$_POST['form_subject'];
            $form_message=$_POST['form_message'];
            message_record($fullname, $form_phone, $form_email, $form_subject, $form_message);
            include 'view/confirm_message_sent.php';
    break;


/******************** REGISTRATION INFORMATION ********************/
//Register for an account goes to register view
    case 'register':
        include 'view/register.php';
    break;

//Confirms Registration sends information to server
    case 'confirm_register':
        //Add content variables here
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

/******************** LOGGING IN INFORMATION ********************/
//Login view
    case 'login':
        //Add content variables here
        include 'view/login.php';
    break;

//Goinng to Profile AFTER logging in
    case 'profile':
        $get_cust_profile = get_cust_profile();
        $customer_profle = cust_profile_table($get_cust_profile);
        
        include 'view/profile.php';
    break;

/******************** CUSTOMER INFORMATION ********************/
//Change Profile VIew
    case 'change_profile':
        include 'views/change_profile.php';
    break;

//Confirm the profile changed
    case 'confirm_profile_change':
        //Goes back to profile with confirm change, 
        //Clear out information if different

        //Chagning profile information look at confirm register for example
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

            

        // $confirm_change = register($email,$username,$hashed_password);
        //     if($confirm_change){
        //         $confirm_message = "Profile Update Successful";
        //         include 'view/profile.php';
        //     } else {
        //         $confirm_message = "Profile Update NOT Successful";
        //         include 'view/change_profile.php';
        //     }
    break;

//Write a review
    case 'write_review':
        include 'view/write_review.php';
    break;

//Confirm Review
    case 'confirm_review':
        $fullName=['fname' . 'lname'];
        $reviewDate=['date'];
        $form_subject=$_POST['subject'];
        $form_message=$_POST['review'];
        review_record($fullname, $phone, $email, $subject, $message);
        include 'view/confirm_write_review.php';
    break;

 //Delete Review
    case 'cust_delete_review':
        

        //$confirm_review_delete = ;
        // if($confirm_review_delete){
        //     $confirm_review_deleted = "Review was Deleted Successfully";
        //     include 'view/profile.php';
        // } else {
        //     $confirm_review_deleted = "Review was NOT Deleted";
        //     include 'view/change_profile.php';
        // }
    break;

    case 'change_password':
        $username = $_POST['username'];
        $password = $_POST['password'];
    break;

/******************** ADMINISTRATION INFORMATION ********************/
//Admin Profile
    case 'admin':
        //Add content variables here
        $messages_list = get_message_list();
        $message_table = message_table($messages_list);
        $admin_get_reviews = get_reviews();
        $admin_reviews = reviews_table($admin_get_reviews);
        $get_profiles = get_profile();
        $profiles_table = profiles_table($get_profiles);
        include 'view/admin.php';
    break;

//Delete profile from customer list
    case 'delete_profile':
        //Add content variables here
        $customerID = $_GET['get_customer_id'];
        delete_cust_profile($customerID);
        include 'view/confirm_delete_profile.php';
        //Change to just being a notice at the top of the page
        // $confirm_delete = delete_cust_profile($customerID);
        // if($confirm_delete){
        //     $profile_del_message = "Profile Deleted";
        //     include 'view/admin.php';
        // } else {
        //     $profile_del_message = "Profile Delete FAIL!";
        //     include 'view/admin.php';
        //  }
    break;  

//Delete Messages
    case 'delete_message':
        //Add content variables here
        $messageID = $_GET['get_message_by_id'];
        delete_message($messageID);
        include 'view/confirm_message_delete.php';
    break;

//Admin Delete Review    
    case 'admin_delete_review':
        $reviewID = $_GET['get_review_by_id'];
        admin_delete_review($reviewID);
        include 'view/admin_confirm_review_delete.php';
    break;


/******************** REVIEWS ********************/
//Reviews Page
    case 'reviews':
        //Add content variables here
        $get_reviews = get_reviews();
        $admin_reviews = reviews_table($get_reviews);
        include 'view/reviews.php';
    break;





//OTHER VIEWS    
    case '404.php':
        //Add content variables here
        include '404.php';
    break;

    case 'about':
        //Add content variables here
        include 'view/about.php';
    break;

    case 'services':
        //Add content variables here
        include 'view/services.php';
    break;



//Default Home
    default:
        include 'view/home.php';
    break;

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
