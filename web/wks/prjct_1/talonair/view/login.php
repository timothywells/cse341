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
        <div class = "login_containter">
            <div class="form_container">
                <div class="form">
                    <form method="POST" action="index.php?action=login" id="login">
                        <h3 class="center">Login</h3>
                        <input type="text" name="login_email" id="login_email" required class="txtinput" placeholder="E-mail">
                        <input type="text" name="login_password" id="login_password" required class="txtinput" placeholder="Password">
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
