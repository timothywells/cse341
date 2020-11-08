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


        <h3 class="center">Messages</h3>
        <!-- LEGEND BOX -->
        <!-- Div needed to format tables -->
        <div class="messages">
            <?php
                echo $message_table;
            ?>
        </div>

        <h3 class="center reviews">Reviews</h3>
        <!-- Div needed to format tables -->
        <div class="reviews">
            <?php
                echo $customer_reviews;
            ?>
        </div>
        <h3 class="center">Customers</h3>
        <!-- Div needed to format tables -->
        <div class="customers">
            <p><?php if(isset($profile_del_message)){echo $profile_del_message;};?></p>
            <?php
                echo $profiles_table;
            ?>
        </div>
    </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
