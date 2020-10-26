<?php 
    $pagetitle = 'Talon Air, Inc. | Reviews';
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
        <h3 class="h3-center">Reviews</h3>
        <!-- Div needed to format table -->
        <?php
            echo $reviews_table;
        ?>
    </body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
