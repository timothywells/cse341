<?php 
    $pagetitle = 'Talon Air, Inc. | Login';
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
        <div class = "login_container">
            <div class="form_container">
                <div class="form">
                
                    <form method="POST" action="index.php?action=login_user" id="login">
                        <h3 class="center">Login</h3>
                        <h5><?php if(isset($login_fail_message)){echo $login_fail_message;};?></h5>
                        <input type="email" name="email" id="email" required class="txtinput" placeholder="E-mail">
                        <input type="password" name="password" id="password" required class="txtinput" placeholder="Password">
                        <input type="submit" id="submit" class="submit" value="Submit">
                    </form>
                </div>
            </div>
            <a href="index.php?action=register">Register</a>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
