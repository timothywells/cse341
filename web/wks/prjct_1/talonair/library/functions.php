<?php
//MESAGES
//Saving a Message from Home Page
function form_record($fullname, $form_phone, $form_email, $form_subject, $form_message){
    $db = herokuConnect();
    $sql = "INSERT INTO send_message(
        fullname, form_phone, form_email, form_subject, form_message
    ) VALUES ('$fullname','$form_phone','$form_email','$form_subject','$form_message')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->closeCursor();
}
//Getting the array of the messages from DB
function make_message_list(){
    $db = herokuConnect();
    $sql = "SELECT * FROM send_message";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $response;
}
//Creates Table in HTML
function message_table($make_message_list){
    $html = '<table>';
    $html .= '<tr><th>Name</th><th>Phone</th><th>E-Mail</th><th>Subject</th><th>Message</th><th></th></tr>';
    foreach($make_message_list as $line_item){
        $html .= "<tr><td>" . $line_item['fullname'] . "</td><td>" . $line_item['form_phone'] . "</td><td>" . $line_item['form_email'] . "</td><td>" . $line_item['form_subject'] . "</td><td>" . $line_item['form_message'] . "</td><td><a href=index.php?action=delete_message&messageID=" . $line_item['message_id']. ">Delete Message</a></td></tr>";
    }
    $html .= '</table>';
    return $html;
}
//Delete from Messaeg Table
function delete_message($messageID){
    $db = herokuConnect();
    $sql = "DELETE FROM send_message WHERE message_id = $messageID";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $response = $stmt->rowCount();
    $stmt->closeCursor();
    return $response;
}

//REGISTER, PROFILE AND LOGIN
//Register for website
function register($email,$username,$password,$fname,$lname,$street_address,$c_city,$c_state,$zip,$phone){
    $db = herokuConnect();
    $sql = "INSERT INTO customer_info(
        email, username. password, fname, fname, lname, street_address, c_city, c_state, zip, phone
    ) VALUES ('$email','$username','$password','$fname','$lname','$street_address','$c_city','$c_state','$zip','$phone')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $stmt->closeCursor();
}
//Login abd hash password
function login(){

}
//Check Login information
function check_cedentials(){

}
//Change Password
function change_password(){

}

//RPOFILES
//Get Profile information for customers
function get_profile(){
    $db = herokuConnect();
    $sql = "SELECT * FROM customer_profile";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $response;
}
//Write Profile to profile page usung Legends and fieldset
function cust_profile(){

}

//ADMIN PROFILE SECTIONS
//Get profiles for admin
function get_profiles_admin() {

}

//User Profiles for Admin as table
function profile_table_admin($get_profile) {
    $html = '<table>';
    $html .= '<tr><th>Name</th><th>Phone</th><th>E-Mail</th><th>Subject</th><th>Message</th><th></th></tr>';
    foreach($get_profile as $line_item){
        $html .= "<tr><td>" . $line_item['fname'] . "</td><td>" . $line_item['lname'] . "</td><td>" . $line_item['street_address'] . "</td><td>" . $line_item['c_city'] . "</td><td>" . $line_item['c_state'] . "</td><td>" . $line_item['zip'] . "</td><td>" . $line_item['phone'] . "</td><td>" . $line_item['email'] . "</td><td><a href=index.php?action=delete_profile&customerID=" . $line_item['customerID']. ">Delete Message</a></td></tr>";
    }
    $html .= '</table>';
    return $html;
}

//Delete Customer Profile
function delete_cust_profile($customerID){
    $db = herokuConnect();
    $sql = "DELETE FROM customer_info WHERE customerid = $customerID";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $response = $stmt->rowCount();
    $stmt->closeCursor();
    return $response;
}

//REVIEWS
//Record the Review
function review_record(){

}
//Get Review Table information
function get_reviews(){

}

//Build Review Table
function review_table(){

}












?>