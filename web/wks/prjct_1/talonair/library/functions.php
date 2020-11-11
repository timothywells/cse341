<?php

/******************** SESSION START INFORMATION ********************/
    //Check to see if user is logged in
        function login_check(){
            if(isset($_SESSION['loggedIn'])){
                if($_SESSION['loggedIn'] == false){
                    $login_fail_message = "You Must Sign in or Register";
                    include 'view/login.php';
                exit;
                }
                if(NULL == isset($_SESSION['clearence'])){
                    $login_fail_message = "You are NOT an ADMIN";
                    include 'view/login.php';
                    exit;
                }
                if(!NULL == (isset($_SESSION['clearence']))){
                    include 'view/admin.php';
                    exit;
                }
            }
            if(!(isset($_SESSION['loggedIn']))){
                $login_fail_message = "You Must Sign in or Register";
                include 'view/login.php';
                exit;
            }
        }
    //

    //Registration check
        // function reg_check(){
        //     if(isset($_SESSION['registered'])){
        //         include 'view/confirm_register.php';
        //         exit;
        //     }
        //     if(!(isset($_SESSION['registered']))){
        //         $reg_message = "You must register first";
        //         include 'view/register.php';
        //     }
        // }

/******************** SEND A MESSAGE INFORMATION ********************/
    //Record Message from index/send_message
        function message_record($fullname, $form_phone, $form_email, $form_subject, $form_message){
            $db = herokuConnect();
            $sql = "INSERT INTO send_message(
                fullname, form_phone, form_email, form_subject, form_message
            ) VALUES ('$fullname','$form_phone','$form_email','$form_subject','$form_message')";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $stmt->closeCursor();
        }
    //

/******************** REGISTRATION INFORMATION ********************/
    //Connects to the server to write information from index/registered
        function register($email,$username,$hashed_password){
            $db = herokuConnect();
            $sql = "INSERT INTO customer_info(email, username, password)
            VALUES ('$email', '$username', '$hashed_password')";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $row_count = $stmt->rowCount();
            $stmt->closeCursor();
            return $row_count;
        }
    //

/******************** LOGGING IN INFORMATION ********************/
    //get login information fom the server based on email
        function signInUser($email, $password){
            $data = getHashed($email);
            $hashedPassword = $data['password'];
            $passwordCheck = password_verify($password, $hashedPassword);
            if ($passwordCheck == true) {
            return $data['customerid'];
            }
            else {
                //failed password check
                return false;
            }
        }
    //

    //Get hashed password by email
        function getHashed($email) {
            $db = herokuConnect();
            $sql = "SELECT * FROM customer_info WHERE email = '$email'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $response;
        }
    //

/******************** CUSTOMER INFORMATION ********************/
    //Get profile by customer_info/customerid and set to $customerId
        function get_cust_profile($customerId){
            $db = herokuConnect();
            $sql = "SELECT * FROM customer_info WHERE customerid = $customerId";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            // echo $customerId . '</br>';
            // echo $response . '</br>';
            return $response;
        }
    //

    //Update Customer Profile
        function update_cust_profile ($customerId,$email,$fname,$lname,$street_address,$c_city,$c_state,$zip,$phone) {  
            $db = herokuConnect();
            $sql = "UPDATE customer_info SET fname = '$fname', lname = '$lname', street_address = '$street_address', c_city = '$c_city', c_state = '$c_state', zip = '$zip', phone = '$phone' WHERE customerid = $customerId RETURNING *";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $response;
        }
    //

    /******************** UNFINISHED PROFILE STUFF ********************/
    //Get Custromer Review by customer's id
        // function get_cust_review(){
        //     $db = herokuConnect();
        //     $sql = "SELECT * FROM customer_review WHERE customerid = $sessionID";
        //     $stmt = $db->prepare($sql);
        //     $stmt->execute();
        //     $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     $stmt->closeCursor();
        //     return $response;
        // }
    //

    //Show customer's review on profile
        function show_cust_review($get_cust_review){

        }    
    //

    //Customer deletes review
        function customer_delete_review() {
            
        }
    //

    //Change Password
        function change_password(){

        }
    //

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
    //Write review to DB
        function review_record($customerid, $review, $review_date){
            $db = herokuConnect();
            $sql = "INSERT INTO review_record(
                customerid, review, review_date
            ) VALUES ('$customerid', '$review', '$review_date')";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $stmt->closeCursor();
        }


    //Customer review Table
        //How do I set the reviews tables to show when each review is created where the customer_review is associated with the customer_info by customerid
        function reviews_table($get_reviews) {
            $html = '<table>';
            foreach($get_reviews as $line_item){
                $html .= "<tr><th>Name</th><th>" . $line_item['fname' . 'lname'] . "</th><th>" . $line_item['review_date'] . "</th></tr>";
                $html .= "<tr><td>" . $line_item['review'] . "</td></tr>";
            }
            $html .= '</table>';
            return $html;
        }
//Unfinished

/******************** ADMIN PROFILE ********************/
    //Get Profile information for Admin
        function get_profile(){
            $db = herokuConnect();
            $sql = "SELECT * FROM customer_info";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $response;
        }
    //

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
    //

    //Creates Message Table in HTML
        function message_table($get_message_list){
            $html = '<table>';
            $html .= '<tr><th>Name</th><th>Phone</th><th>E-Mail</th><th>Subject</th><th>Message</th><th>Delete Message</th></tr>';
            foreach($get_message_list as $line_item){
                $html .= "<tr><td>" . $line_item['fullname'] . "</td><td>" . $line_item['form_phone'] . "</td><td>" . $line_item['form_email'] . "</td><td>" . $line_item['form_subject'] . "</td><td>" . $line_item['form_message'] . "</td><td><a href=index.php?action=delete_message&get_message_by_id=" . $line_item['message_id']. ">Delete Message</a></td></tr>";
            }
            $html .= '</table>';
            return $html;
        }
    //

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
    //

    //Admin Reviews Table
        function admin_reviews_table($get_reviews) {
            $html = '<table>';
            $html .= '<tr><th>First Name</th><th>Last Name</th><th>Review Date</th><th>Review</th><th>Delete Review</th></tr>';
            foreach($get_reviews as $line_item){
                $html .= "<tr><td>" . $line_item['fname'] . "</td><td>" . $line_item['lname'] . "</td><td>" . $line_item['review_date'] . "</td><td>" . $line_item['review'] . "</td><td><a href=index.php?action=admin_delete_review&get_review_by_id=" . $line_item['reviewid'] . ">Delete Review</a></td></tr>";
            }
            $html .= '</table>';
            return $html;
        }
    //

    //Admin deletes review
        function admin_delete_review() {
            $db = herokuConnect();
            $sql = "DELETE FROM customer_review WHERE reviewid = $reviewID";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $response = $stmt->rowCount();
            $stmt->closeCursor();
            return $response;
        }
    //

    //User Profile Table for Admin as table
        function profiles_table($get_profile) {
            $html = '<table>';
            $html .= '<tr><th>First Name</th><th>Last Name</th><th>Stree Address</th><th>City</th><th>State</th><th>Zip</th><th>Phone</th><th>Email</th><th>Delete Profiles</th></tr>';
            foreach($get_profile as $line_item){
                $html .= "<tr><td>" . $line_item['fname'] . "</td><td>" . $line_item['lname'] . "</td><td>" . $line_item['street_address'] . "</td><td>" . $line_item['c_city'] . "</td><td>" . $line_item['c_state'] . "</td><td>" . $line_item['zip'] . "</td><td>" . $line_item['phone'] . "</td><td>" . $line_item['email'] . "</td><td><a href=index.php?action=delete_profile&get_customer_id=" . $line_item['customerid'] . ">Delete Profile</a></td></tr>";
            }
            $html .= '</table>';
            return $html;
        }
    //

    //Connect to and Delete Customer Profile
        function delete_cust_profile($deleteCustomer){
            $db = herokuConnect();
            $sql = "DELETE FROM customer_info WHERE customerid = $deleteCustomer";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $response = $stmt->rowCount();
            $stmt->closeCursor();
            return $response;
        }
    //
?>