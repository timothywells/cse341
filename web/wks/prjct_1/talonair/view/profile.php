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
        <h1>Profile</h1>
        <!-- Div needed to format -->
        <?php
            echo $cust_profle;
        ?>

        <h1>Your Messages</h1>
        <!-- Div needed to format -->
        <?php
            echo $cust_message;
        ?>

        <h1>Your Reviews</h1>
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
