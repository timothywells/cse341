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
		<div class="register_container">
			<div class="form_container">
				<div class="form">
					<form method="POST" action="index.php?action=profile_update" id="profile_update">
						<h3 class="center">Profile Update</h3>
						<input type="text" name="first_name" id="first_name" class="txtinput" placeholder="First Name">
						<input type="text" name="last_name" id="last_name" class="txtinput" placeholder="Last Name">
						<input type="text" name="address" id="address" class="txtinput" placeholder="address">
						<input type="text" name="phone" id="phone" class="txtinput" placeholder="Phone Number">
						<input type="submit" id="submit" class="submit" value="Submit">
						<button type="button" id="submit" class="button">Submit</button>
					</form>
					<form method="post" action="index.php?action=credentials_update" id="credentials_update">
						<input type="email" name="email" id="email" class="txtinput" placeholder="E-mail">
						<input type="text" name="password" id="password" class="txtinput" placeholder="Password">
						<input type="text" name="password" id="password" class="txtinput" placeholder="Password">
						<button type="button" id="submit" class="button">Submit</button>
					</form>
				</div>
			</div>
		</div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
