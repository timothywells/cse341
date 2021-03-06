<?php 
    login_check();
    $pagetitle = 'Talon Air, Inc. | Confirm Registration';
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
		<div class="password_container">
			<h3 class="center">Change Password</h3>
                <form method="post" action="index.php" id="credentials_update">
					<input type="email" name="email" id="email" class="txtinput" placeholder="E-mail">
					<input type="text" name="password" id="password" class="txtinput" placeholder="Password">
					<input type="text" name="passwordConfirm" id="passwordConfirm" class="txtinput" placeholder="Confirm Password">
					<input type="hidden" name="action" value="password_update">
                    <button type="button" id="submit" class="button">Submit</button>
                    <!--alert password changed-->
				</form>
		</div>
	</div>
	</main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
