<?php 
    $pagetitle = 'Talon Air, Inc. | Admin Home';
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
        <h3 class="h3-center">Admin Profile</h3>
        <!-- Div needed to format tables, possibly skip the profile here cause it is just Admin in general -->
        <?php
            echo $profle_table;
        ?>


        <h1>Messages</h1>
        <!-- Div needed to format tables -->
        <?php
            echo $message_table;
        ?>


        <h1>Reviews</h1>
        <!-- Div needed to format tables -->
        <?php
            echo $customer_reviews;
        ?>


        <h1>Customers</h1>
        <!-- Div needed to format tables -->
        <?php
            echo $customer_table;
        ?>

    </body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
