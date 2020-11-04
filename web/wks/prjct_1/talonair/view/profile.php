<?php 
    $pagetitle = 'Talon Air, Inc. | Profile';
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
            <h3 class="center profile">Profile</h3>
                <!-- Div needed to format -->
                <?php
                    echo $cust_profle;
                ?>

            <h3 class="center review">Your Reviews</h3>
                <!-- Div needed to format -->
                <?php
                    echo $cust_review;
                ?>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
