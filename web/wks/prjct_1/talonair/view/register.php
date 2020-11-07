<?php 
    $pagetitle = 'Talon Air, Inc. | Register';
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
	<?php
		if(isset($reg_meesage)){echo $reg_message;};
	?>
		<div class="register_container">
			<div class="form_container">
				<div class="form">
					<form method="POST" action="index.php" id="confirm_register">
						<h3 class="center">Register</h3>
						<input type="text" name="username" id="username" required class="txtinput" placeholder="Username">
						<input type="email" name="email" id="email" required class="txtinput" placeholder="E-mail">
						<input type="text" name="password" id="password" required class="txtinput" placeholder="Password">
						<input type="text" name="passwordConfirm" id="passwordConfirm" required class="txtinput" placeholder="Confirm Password">
						<input type="hidden" name="action" value="confirm_register">
                        <input type="submit" id="submit" class="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
