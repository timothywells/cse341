<?php 
    login_check();
    $pagetitle = 'Talon Air, Inc. | Admin Home';
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
        <h3 class="center">Admin Profile</h3>
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
            <h3 class="center review">Profile Options</h3>
                <p><?php if(isset($review_message)){echo $review_message;}; ?></p>
                <p><?php if(isset($profile_change_message)){echo $profile_change_message;};?></p>
                <p><?php if(isset($password_change_message)){echo $password_change_message;};?></p>
                <div class="confirm_links">
                    <a class="links" href="index.php?action=change_profile">Update Profile</a>
                    <a class="links" href="index.php?action=change_password">Change Password</a>
                    <a class="log_out" href="index.php?action=log_out">Log Out</a>
                </div>
            <br>
        </div>
        <div class="formatted_view">

            <h3 class="center">Messages</h3>
                <div class="messages">
                    <?php echo $message_table; ?>
                </div>
                <br>
            <h3 class="center reviews">Reviews</h3>
                <div class="reviews">
                    <?php echo $admin_reviews; ?>
                </div>
            <br>
            <h3 class="center">Customers</h3>
                <div class="customers">
                    <h5><?php if(isset($profile_del_message)){echo $profile_del_message;};?></h5>
                    <?php echo $profiles_table;?>
                </div>
            <br>
    </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
