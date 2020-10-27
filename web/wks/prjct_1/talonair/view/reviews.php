<?php 
    $pagetitle = 'Talon Air, Inc. | Reviews';
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
        <h3 class="center">Reviews</h3>
        <!-- Div needed to format table -->
        <?php
            echo $reviews_table;
        ?>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
