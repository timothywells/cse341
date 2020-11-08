<?php
/******************** SEND A MESSAGE INFORMATION ********************/
//Saving a Message from Home Page
    function message_record($fullname, $form_phone, $form_email, $form_subject, $form_message){
        $db = herokuConnect();
        $sql = "INSERT INTO send_message(
            fullname, form_phone, form_email, form_subject, form_message
        ) VALUES ('$fullname','$form_phone','$form_email','$form_subject','$form_message')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
    }
//Getting the array of the messages from DB
    function get_message_list(){
        $db = herokuConnect();
        $sql = "SELECT * FROM send_message";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $response;
    }
//Creates Table in HTML
    function message_table($get_message_list){
        $html = '<table>';
        $html .= '<tr><th>Name</th><th>Phone</th><th>E-Mail</th><th>Subject</th><th>Message</th><th></th></tr>';
        foreach($get_message_list as $line_item){
            $html .= "<tr><td>" . $line_item['fullname'] . "</td><td>" . $line_item['form_phone'] . "</td><td>" . $line_item['form_email'] . "</td><td>" . $line_item['form_subject'] . "</td><td>" . $line_item['form_message'] . "</td><td><a href=index.php?action=delete_message&get_message_by_id=" . $line_item['message_id']. ">Delete Message</a></td></tr>";
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

/******************** REGISTRATION INFORMATION ********************/
//Register for website
    function register($email,$username,$hashed_password){
        //check that passwords match and has passwords
        $db = herokuConnect();
        $sql = "INSERT INTO customer_info(email, username, password)
        VALUES ('$email', '$username', '$hashed_password')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $row_count = $stmt->rowCount();
        $stmt->closeCursor();
        return $row_count;
    }

/******************** LOGGING IN INFORMATION ********************/
//get login information
    function get_login_info(){

    }

//Login abd hash password
    function login(){

    }

//Check Login information
    function check_cedentials(){

    }

/******************** GET PROFILE INFORMATION ********************/
//Get Profile information for customers
    function get_profile(){
        $db = herokuConnect();
        $sql = "SELECT * FROM customer_info";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $response;
    }


/******************** CUSTOMER INFORMATION ********************/
//Write Profile to profile page usung Legends and fieldset
//Need to fet only the customer profile of the customer logged in
    function get_cust_profile(){
        $db = herokuConnect();
        $sql = "SELECT * FROM customer_info WHERE customerid = $sessionID";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $response;
    }

//Customer Profile Information
    function cust_profile ($get_cust_profile){

    }


//Update Customer Profile
    function update_cust_profile ($customerid,$fname,$lname,$street_address,$c_city,$c_state,$zip,$phone) {  
        $db = herokuConnect();
        $sql = "INSERT INTO customer_info WHERE customerid = $sessionID (
            fname, fname, lname, street_address, c_city, c_state, zip, phone
        ) VALUES ('$fname','$lname','$street_address','$c_city','$c_state','$zip','$phone')
        WHERE customerid = $customerid";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
    }

//Get Custromer Review by customer's id
    function get_cust_review(){
        $db = herokuConnect();
        $sql = "SELECT * FROM customer_review WHERE customerid = $sessionID";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $response;
    }
    //Customer deletes review
    function customer_delete_review() {
        
    }
//Change Password
    function change_password(){

    }

/******************** Write a review ********************/
//Record the Review
    function review_record(){

    }


/******************** CUSTOMER REVIEWS PAGE ********************/
//Get the reviews for the reviews page
    function get_reviews(){
        $db = herokuConnect();
        $sql = "SELECT * FROM customer_review";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $response;
    }

//Customer review Table
    function reviews_table($get_reviews) {
        $html = '<table>';
        foreach($get_reviews as $line_item){
            $html .= "<tr><th>Name</th><th>" . $line_item['fname' . 'lname'] . "</th><th>" . $line_item['review_date'] . "</th></tr>";
            $html .= "<tr><td>" . $line_item['review'] . "</td></tr>";
        }
        $html .= '</table>';
        return $html;
    }



/******************** ADMIN PROFILE ********************/
//User Profiles for Admin as table
    function profiles_table($get_profile) {
        $html = '<table>';
        $html .= '<tr><th>First Name</th><th>Last Name</th><th>Stree Address</th><th>City</th><th>State</th><th>Zip</th><th>Phone</th><th>Email</th><th>Delete Profiles</th></tr>';
        foreach($get_profile as $line_item){
            $html .= "<tr><td>" . $line_item['fname'] . "</td><td>" . $line_item['lname'] . "</td><td>" . $line_item['street_address'] . "</td><td>" . $line_item['c_city'] . "</td><td>" . $line_item['c_state'] . "</td><td>" . $line_item['zip'] . "</td><td>" . $line_item['phone'] . "</td><td>" . $line_item['email'] . "</td><td><a href=index.php?action=delete_profile&get_customer_id=" . $line_item['customerid'] . ">Delete Profile</a></td></tr>";
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
//Admin deletes review
    function admin_delete_review() {

    }












?>