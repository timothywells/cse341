<?php
    login_check();

    $pagetitle = 'Talon Air, Inc. | Confirm Message Deleted';
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
                <!-- Div needed to format center and pic -->
        <div class="formatted_view">
            <h3 class="center">Message Deleted</h3>
            <div class="confirm_links largebtn">
                <a href="index.php?action=admin">RETURN TO ADMIN PROFILE</a>
                <!-- <button type='button' id='yes'>Yes</Button><button type='button' id='no'>No</button> -->
            </div>
        </div>
	</main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
