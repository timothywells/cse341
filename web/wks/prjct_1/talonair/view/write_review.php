<?php 
    login_check();
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
            <div class="write_review_container">
				<div class="form">
					<form method="POST" action="index.php?action=confirm_review" id="form">
						<h3 class="center">Write a Review</h3>
						<input type="text" name="fullname" id="name" required class="txtinput" placeholder="Full Name">
						<input type="date" name="date" id="date" required class="txtinput" placeholder="Date">
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
