<?php 
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
					<form method="POST" action="index.php?action=udpate_profile" id="profile_update">
						<h3 class="center">Profile Update</h3>
						<input type="text" name="email" id="email" class="txtinput" placeholder="E-mail">
						<input type="text" name="fname" id="fname" class="txtinput" placeholder="First Name">
						<input type="text" name="lname" id="lname" class="txtinput" placeholder="Last Name">
						<input type="text" name="street_address" id="street_address" class="txtinput" placeholder="address">
						<input type="text" name="c_city" id="c_city" class="txtinput" placeholder="City">
						<input type="text" name="c_state" id="c_state" class="txtinput" placeholder="State">
						<input type="text" name="zip" id="zip" class="txtinput" placeholder="Zip">
						<input type="text" name="phone" id="phone" class="txtinput" placeholder="Phone Number">
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
