<?php 
    $pagetitle = 'Talon Air, Inc. | Messages';
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
        <h3 class="messages-h">View Messages</h3>
        <!-- Div needed to format tables -->
        <?php
            echo $message_table;
        ?>

    </body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
