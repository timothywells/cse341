<?php
 loginLink();
?>
<ul>
    <li><a href="index.php">Home</a></li>
	<li><a href="index.php?action=about">About</a></li>
    <li><a href="index.php?action=services">Services</a></li>
    <li><a href="index.php?action=reviews">Reviews</a></li>
    <li><?php echo $loginLinks ?></li>
    <li><a href="index.php?action=login">Log in or Register</a></li>
</ul>