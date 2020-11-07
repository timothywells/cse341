<?php 
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
        <div class="formatted_view">
            <h3 class="center profile">Profile</h3>
                <!-- Div needed to format -->
                <?php
                    echo $cust_profle;
                ?>

            <h3 class="center review">Your Reviews</h3>
                <?php
                    echo $cust_review;
                ?>
            <h3 class="center password">Change Password</h3>
                <form method="post" action="index.php?action=credentials_update" id="credentials_update">
					<input type="email" name="email" id="email" class="txtinput" placeholder="E-mail">
					<input type="text" name="password" id="password" class="txtinput" placeholder="Password">
					<input type="text" name="password" id="password" class="txtinput" placeholder="Password">
                    <button type="button" id="submit" class="button">Submit</button>
                    <!--alert password changed-->
				</form>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
