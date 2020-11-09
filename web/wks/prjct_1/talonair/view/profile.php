<?php

    // login_check();
    if(isset($_SESSION['loggedIn'])){
        if($_SESSION['loggedIn'] == false){
            echo 'we are in the profile 1';
            include 'view/login.php';
        exit;
        }
    }
    if(!(isset($_SESSION['loggedIn']))){
        //echo 'we are in the profile 2';
        include 'view/login.php';
        exit;
    }

    $pagetitle = 'Talon Air, Inc. | Profile';
    $_SESSION['customerSessionData']['fname'];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'common/head.php'; ?>
    </head>
	<header>
        <?php include 'common/header.php'; ?>
	</header>
	<nav>
        <?php include 'common/nav.php'; ?>
	</nav>
	<main>
        <div class="formatted_view">
            <h3 class="center">Profile</h3>
                <!-- Div needed to format -->
                <table class="profile">
                    <tr><td>Username:</td><td></td></tr>
                    <tr><td>E-mail:</td><td></td></tr>
                    <tr><td>First Name:</td><td></td></tr>
                    <tr><td>Last Name:</td><td></td></tr>
                    <tr><td>Street</td><td></td></tr>
                    <tr><td>City:</td><td></td></tr>
                    <tr><td>State:</td><td></td></tr>
                    <tr><td>Zip:</td><td></td></tr>
                    <tr><td>Phone:</td><td></td></tr>
                </table>

                <?php
                    echo $customer_profle;
                ?>
                <div class="confirm_links">
                    <a href="index.php?action=change_profile">Update Profile</a>
                </div>
            <h3 class="center review">Your Reviews</h3>
                <p><?php if(isset($review_message)){echo $review_message;}; ?></p>
                <?php echo $cust_review; ?>

                <div class="confirm_links">
                    <a href="index.php?action=write_review">Write a Review</a>
                </div>
            <h3 class="center password">Change Password</h3>
                <form method="post" action="index.php?action=credentials_update" id="credentials_update">
					<input type="email" name="email" id="email" class="txtinput" placeholder="E-mail">
					<input type="text" name="password" id="password" class="txtinput" placeholder="Password">
					<input type="text" name="passwordConfirm" id="passwordConfirm" class="txtinput" placeholder="Confirm Password">
                    <button type="button" id="submit" class="button">Submit</button>
                    <!--alert password changed-->
                </form>
                <!-- <div class="confirm_links log_out">
                    <a href="index.php?action=log_out">Log Out</a>
                </div> -->
        </div>
        
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
