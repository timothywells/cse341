<?php
if($_SESSION['loggedIn'] == false){
    $loginLinks = "<a href=index.php?action=login>Login/Register</a>";
}
if($_SESSION['loggedIn'] == true){
    $loginLinks = "<a href=index.php?action=profile>Profile</a>";
    $logOut = "<li><a class=logout href=index.php?action=log_out>Logout</a></li>";
    }
if($_SESSION['clearance'] == true){
    $loginLinks = "<a href=index.php?action=profile>Adminisrtator</a>";
    $logOut = "<li><a class=logout href=index.php?action=log_out>Logout</a></li>";
}
?>
<ul>
    <li><a href="index.php">Home</a></li>
	<li><a href="index.php?action=about">About</a></li>
    <li><a href="index.php?action=services">Services</a></li>
    <li><a href="index.php?action=reviews">Reviews</a></li>
    <li><?php echo $loginLinks ?></li>
    <?php echo $logOut ?>
</ul>