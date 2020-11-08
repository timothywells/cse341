<?php 
    if(isset($_SERVER['loggedIn'])){
        if($_SERVER['loggedIn'] == false){
            echo 'we are in the profile 1';
            include 'view/login.php';
        exit;
        }
    } else {
        echo 'we are in the profile 2';
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
        <div class="formatted_view profile">
            <h3 class="center profile">Profile</h3>
                <!-- Div needed to format -->
                <?php
                    echo $customer_profle;
                ?>
                <div class="confirm_links">
                    <a href="index.php?action=change_profile">Update Profile</a>
                </div>
            <h3 class="center review">Your Reviews</h3>
                <p> <?php  echo $_SESSION['customerSessionData']['username']; ?></p>
                <p>
                    <?php
                    if(isset($reg_message)){echo $reg_message;};
                    ?>
                </p>
                <?php
                    echo $cust_review;
                ?>
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
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
