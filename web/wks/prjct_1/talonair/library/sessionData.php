<?php
$cusomerid=$username=$email=$fname=$lname=$street_address=$c_city=$c_state=$zip=$phone=$clearance = "";
if(count($_SESSION) != 0 && isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])
{
    $customerid = $_SESSION['customerId'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $street_address = $_SESSION['street_address'];
    $c_city = $_SESSION['c_city'];
    $c_state = $_SESSION['c_state'];
    $zip = $_SESSION['zip'];
    $phone = $_SESSION['phone'];
    $clearance = $_SESSION['clearance'];
} 

// else {
//     session_unset();
//     session_destroy(); 
//     include 'view/home.php';
// }
?>