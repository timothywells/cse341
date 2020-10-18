<?php 
    $pagetitle = 'Talon Air, Inc. | Home';
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
		<div class="banner" id="home_banner"></div>
		<div class="firstblock">
			<div class="desc" id="main_desc">
				<h2>What makes Talon Air different</h2>
					<p>Talon Air, Inc. has been providing top notch HVAC services to both residential and commercial properties for over 15 years. We may not be the largest or oldest HVAC company in the Valley but we will make sure that you get what you want. We strive to bring the kind of service to our clients that we provide for our own homes.</p>
			</div>
			<div class="image" id="ac_unit"></div>
		</div>
		<div class="secondblock">
			<div class="desc" id="form_desc">
				<h2>Contact Us</h2>
				<p>Feel free to contact us via this contact form. Do not use the form if the reason you are contacting us is an emergency. Please call or text us immediately with the phone number that is povided at the top of the page.</p>
			</div>
			<div class="form_container">
				<div class="form">
					<form method="POST" action="index.php?action=send_message" id="form">
						<h4>Contact</h4>
						<input type="text" name="fullname" id="name" required class="txtinput" placeholder="Full Name">
						<input type="text" name="form_phone" id="phone" required class="txtinput" placeholder="Phone Number">
						<input type="email" name="form_email" id="email" class="txtinput" placeholder="E-mail">
						<input type="text" name="form_subject" id="subject" required class="txtinput" placeholder="Subject">
						<textarea name="form_message" id="message" class="message" required placeholder="Message"></textarea>
						<input type="submit" id="submit" class="submit" value="Submit">
					</form>
				</div>
			</div>

			
		</div>
		<div class="logos" id="company_logos"></div>
	</body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
