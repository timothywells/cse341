<?php 
    $pagetitle = 'Talon Air, Inc. | Messages';
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
            <h3 class="center">View Messages</h3>
            <?php
                echo $message_table;
            ?>
        </div>
    </main>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</html>
