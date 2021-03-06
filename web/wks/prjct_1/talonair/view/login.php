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
                        <?php if(isset($login_fail_message)){echo '<h5>' . $login_fail_message . '</h5>';};?>
                        <input type="email" name="email" id="email"  class="txtinput" placeholder="E-mail" required>
                        <input type="password" name="password" id="password"  class="txtinput" placeholder="Password" required>
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
