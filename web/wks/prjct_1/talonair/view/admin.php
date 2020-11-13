<?php 
    login_check();
    admin_check();

    $messages_list = get_message_list();
    $message_table = message_table($messages_list);
    $admin_get_reviews = get_reviews();
    $admin_reviews_table = admin_reviews_table($admin_get_reviews);
    $get_profiles = get_profile();
    $profiles_table = profiles_table($get_profiles);

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
                <?php if(isset($profile_change_message)){echo '<h5>' . $profile_change_message . '</h5>';};?>
                <?php if(isset($password_change_message)){echo '<h5>' . $password_change_message . '</h5>';};?>
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
                <?php if(isset($review_message)){echo $review_message;}; ?>
                <?php if(isset($profile_change_message)){echo $profile_change_message;};?>
                <?php if(isset($password_change_message)){echo $password_change_message;};?>
                <div class="confirm_links">
                    <a class="links" href="index.php?action=change_profile">Update Profile</a>
                    <a class="links" href="index.php?action=change_password">Change Password</a>
                    <a class="log_out" href="index.php?action=log_out">Log Out</a>
                </div>
        </div>
    <br>
        <div class="formatted_view">
                <h3 class="center">Messages</h3>
                    <?php if(isset($message_del_message)){echo "<h5>" . $message_del_message . "</h5>";}; ?>
                    <div class="messages">
                    
                        <?php
                            echo $message_table;
                        ?>
                    </div>
                    <br>
                <h3 class="center">Reviews</h3>
                    <?php if(isset($review_del_message)){echo "<h5>" . $review_del_message . "</h5>";}; ?>
                    <div class="reviews">
                        <?php
                            echo $admin_reviews;
                        ?>
                    </div>
                <br>
                <h3 class="center">Customers</h3>
                    <?php if(isset($profile_del_message)){echo "<h5>" . $profile_del_message . "</h5>";}; ?>    
                    <div class="customers">
                        <?php
                            echo $profiles_table;
                        ?>
                    </div>
                <br>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
