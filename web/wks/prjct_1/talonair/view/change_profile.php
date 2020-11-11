<?php 
	login_check();
	
    $pagetitle = 'Talon Air, Inc. | Change Profile';
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
		<div class="register_container">
			<div class="form_container">
				<div class="form">
					<form method="POST" action="index.php" id="profile_update">
						<h3 class="center">Profile Update</h3>
						<input type="text" name="fname" value="<?php echo $_SESSION['fname']; ?>" id="fname" class="txtinput" placeholder="First Name" required>
						<input type="text" name="lname" value="<?php echo $_SESSION['lname']; ?>" id="lname" class="txtinput" placeholder="Last Name" required>
						<input type="text" name="street_address" value="<?php echo $_SESSION['street_address']; ?>" id="street_address" class="txtinput" placeholder="Street Address" required>
						<input type="text" name="c_city" value="<?php echo $_SESSION['c_city']; ?>" id="c_city" class="txtinput" placeholder="City" required>
						<input type="text" name="c_state" value="<?php echo $_SESSION['c_state']; ?>" id="c_state" class="txtinput" placeholder="State" required>
						<input type="text" name="zip" value="<?php echo $_SESSION['zip']; ?>" id="zip" class="txtinput" placeholder="Zip" required>
						<input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" id="phone" class="txtinput" placeholder="Phone Number" required>
						<input type="hidden" name="action" value="password_update">
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
