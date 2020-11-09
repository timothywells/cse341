<?php 
    login_check();
    $pagetitle = 'Talon Air, Inc. | Confirm Profile Change';
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
        <div class="formatted_view confirm">
            <h3 class="center profile">Thank You</h3>
                <p>Your Profile has changed</p>
            <div class="confirm_links">
                <a href="index.php?action=profile">RETURN TO PROFILE</a>
            </div>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
