<?php
if($_SESSION['loggedIn'] == false){
    $loginLinks = "<a href=index.php?action=login>Login/Register</a>";
}
if($_SESSION['loggedIn'] == true){
    $loginLinks = "<a href=index.php?action=profile>Profile</a>";
    $logOut = "<a href=index.php?action=log_out>Logout</a>";
    }
if($_SESSION['clearance'] == true){
    $loginLinks = "<a href=index.php?action=profile>Adminisrtator</a>";
    $logOut = "<li class=logout><a href=index.php?action=log_out>Logout</a></li>";
}
?>
<ul>
    <li><a href="index.php">Home</a></li>
	<li><a href="index.php?action=about">About</a></li>
    <li><a href="index.php?action=services">Services</a></li>
    <li><a href="index.php?action=reviews">Reviews</a></li>
    <li><?php echo $loginLinks ?></li>
    <?php echo $logout ?>
</ul>