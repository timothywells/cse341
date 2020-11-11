<?php
    login_check();
    $pagetitle = 'Talon Air, Inc. | Profile';
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
        <div class="formatted_view profile">
            <h3 class="center">Profile</h3>
            <p><?php if(isset($review_message)){echo $review_message;}; ?></p>
            <p><?php if(isset($profile_change_message)){echo $profile_change_message;};?></p>
            <p><?php if(isset($password_change_message)){echo $password_change_message;};?></p>
                <table class="profile">
                    <tr><td>Username:</td><td><?php echo $_SESSION['username']; ?></td></tr>
                    <tr><td>E-mail:</td><td><?php echo $_SESSION['email']; ?></td></tr>
                    <tr><td>First Name:</td><td><?php echo $_SESSION['fname']; ?></td></tr>
                    <tr><td>Last Name:</td><td><?php echo $_SESSION['lname']; ?></td></tr>
                    <tr><td>Street</td><td><?php echo $_SESSION['street_address']; ?></td></tr>
                    <tr><td>City:</td><td><?php echo $_SESSION['c_city']; ?></td></tr>
                    <tr><td>State:</td><td><?php echo $_SESSION['c_state']; ?></td></tr>
                    <tr><td>Zip:</td><td><?php echo $_SESSION['zip']; ?></td></tr>
                    <tr><td>Phone:</td><td><?php echo $_SESSION['phone']; ?></td></tr>
                </table>
            <h3 class="center review">Your Reviews</h3>
                <?php echo $cust_review; ?>
                <div class="confirm_links">
                    <a class="links" href="index.php?action=change_profile">Update Profile</a>
                    <a class="links" href="index.php?action=write_review">Write a Review</a>
                    <a class="links" href="index.php?action=change_password">Change Password</a>
                    <a class="log_out" href="index.php?action=log_out">Log Out</a>
                </div>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
