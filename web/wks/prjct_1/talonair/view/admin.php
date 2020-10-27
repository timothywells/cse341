<?php 
    $pagetitle = 'Talon Air, Inc. | Admin Home';
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
        <h3 class="center">Admin Profile</h3>
        <!-- Div needed to format tables, possibly skip the profile here cause it is just Admin in general -->
        <?php
            echo $profle_table;
        ?>

        <h3 class="center">Messages</h3>
        <!-- Div needed to format tables -->
        <?php
            echo $message_table;
        ?>

        <h3 class="center">Reviews</h3>
        <!-- Div needed to format tables -->
        <?php
            echo $customer_reviews;
        ?>


        <h3 class="center">Customers</h3>
        <!-- Div needed to format tables -->
        <?php
            echo $customer_table;
        ?>
    </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
