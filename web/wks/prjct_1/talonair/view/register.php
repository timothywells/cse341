<?php 
    $pagetitle = 'Talon Air, Inc. | Register';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'common/head.php'; ?>
</head>
<div class="wrapper">	
	<header>
        <?php include 'common/header.php'; ?>
	</header>
	
	<nav>
        <?php include 'common/nav.php'; ?>
	</nav>
	
	<body id="talon-air-home">
        <div class="form_container">
			<div class="form">
				<form method="POST" action="index.php?action=register" id="register">
					<h4>Register</h4>
                    <input type="text" name="first_name" id="first_name" required class="txtinput" placeholder="First Name">
                    <input type="text" name="last_name" id="last_name" required class="txtinput" placeholder="Last Name">
                    <input type="text" name="password" id="password" required class="txtinput" placeholder="Password">
					<input type="text" name="phone" id="phone" class="txtinput" placeholder="Phone Number">
					<input type="email" name="email" id="email" required class="txtinput" placeholder="E-mail">
					<input type="submit" id="submit" class="submit" value="Submit">
					</form>
				</div>
    </body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
