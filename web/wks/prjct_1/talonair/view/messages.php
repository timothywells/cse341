<?php 
    $pagetitle = 'Talon Air, Inc. | Home';
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
        <h1>View Messages</h1>
        <?php
            print_r($messages_list);
            echo $messages_list[0]['fullname'];

            $html = '<table>';
            $html .= '<tr><th>Name</th><th>Phone</th><th>E-Mail</th><th>Subject</th><th>Message</th></tr>';
            //foreach($messages_list as $line_item){
            //    $html .= "<tr><td>" . $line_item['fullname'] . "</td><td>" . $line_item['form_phone'] . "</td><td>" . $line_item['form_email'] . "</td><td>" . $line_item['form_subject'] . "</td><td>" . $line_item['form_message'] . "</td></tr>";
            //}
            $html .= '</table>';
            echo $html;
        ?>
    </body>
	<footer>
            <?php include 'common/footer.php'; ?>
	</footer>
</div>
</html>
