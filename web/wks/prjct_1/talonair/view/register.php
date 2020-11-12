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
					<form method="POST" action="index.php?action=registered" enctype="multipart/form-data">
						<h3 class="center">Register</h3>
						<h5><?php if(isset($reg_message)){echo $reg_message;};?></h5>
						<input type="text" name="username" id="username" required class="txtinput" placeholder="Username" requiered>
						<input type="email" name="email" id="email" required class="txtinput" placeholder="E-mail" required>
						<input type="password" name="password" id="password" required class="txtinput" placeholder="Password" required>
						<input type="password" name="passwordConfirm" id="passwordConfirm" required class="txtinput" placeholder="Confirm Password" required>
						<!-- <input type="hidden" name="action" value="registered"> -->
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
