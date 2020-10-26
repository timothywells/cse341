<?php 
    $pagetitle = 'Talon Air, Inc. | Profile';
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
        <h3 class="h3-center">Profile</h3>
        <!-- Div needed to format -->
        <?php
            echo $cust_profle;
        ?>

        <h3 class="h3-center">Your Messages</h3>
        <!-- Div needed to format -->
        <?php
            echo $cust_message;
        ?>

        <h3 class="h3-center">Your Reviews</h3>
        <!-- Div needed to format -->
        <?php
            echo $cust_review;
        ?>
    </body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
