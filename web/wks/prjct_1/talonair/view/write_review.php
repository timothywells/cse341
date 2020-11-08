<?php 
    $pagetitle = 'Talon Air, Inc. | Write a Review';
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
            <h3 class="center">Write a Review</h3>
            <div class="write_review_container">
				<div class="form">
					<form method="POST" action="index.php?action=write_review" id="form">
						<h4>Contact</h4>
						<input type="text" name="fullname" id="name" required class="txtinput" placeholder="Full Name">
						<input type="text" name="phone" id="phone" required class="txtinput" placeholder="Phone Number">
						<input type="email" name="email" id="email" class="txtinput" placeholder="E-mail">
						<input type="text" name="subject" id="subject" required class="txtinput" placeholder="Subject">
						<textarea name="message" id="message" class="message" required placeholder="Message"></textarea>
						<input type="submit" id="submit" class="submit" value="Submit">
					</form>
				</div>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
