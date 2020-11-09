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
        <!-- Div needed to format center and pic -->
		<h3><?php if(isset($review_message)){echo $review_message;};?></h3>

		<div class="confirm_links">
			<a href="index.php">Return to Talon Air Home</a>
			<a href="index.php?action=profile">Go to Profile</a>
			<a href="index.php?action=reviews">Go to Reviews</a>
		</div>
	</div>
	</main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
