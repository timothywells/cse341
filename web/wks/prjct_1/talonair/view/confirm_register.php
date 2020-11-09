<?php 
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
		<h3><?php if(isset($reg_message)){echo $reg_message;};?></h3>

		<div class="confirm_links">
			<a class="links" href="index.php">Return to Talon Air Home</a>
			<a class="links" href="index.php?action=profile">Go to Profile</a>
			<a class="links" href="index.php?action=write_review">Write a Review</a>
		</div>
	</div>
	</main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
