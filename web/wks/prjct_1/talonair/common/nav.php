<?php
if($_SESSION['loggedIn'] == false){
    $loginLinks = "<a href=index.php?action=login>Login/Register</a>";
}
if($_SESSION['loggedIn'] == true){
    $loginLinks = "<a href=index.php?action=profile>Profile/Logout</a>";
    }
if($_SESSION['clearance'] == true){
    $loginLinks = "<a href=index.php?action=profile>Adminisrtator</a>";
}
?>
<ul>
    <li><a href="index.php">Home</a></li>
	<li><a href="index.php?action=about">About</a></li>
    <li><a href="index.php?action=services">Services</a></li>
    <li><a href="index.php?action=reviews">Reviews</a></li>
    <li><?php echo $loginLinks ?></li>
    <li><a href="index.php?action=login">Log in or Register</a></li>
</ul>