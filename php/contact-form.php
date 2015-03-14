<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact form</title>
<link rel="stylesheet" href="../styles/style-php.css"/>
</head>

<body>

<?php
	
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Website Contact Form'; 
    $to = 'krystlecmyk@gmail.com, krystlecmyk@hotmail.com'; 
    $subject = 'Website Contact Form';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message: $message\n";
	
	echo "asdf";
				
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} 
	else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
	<a href="../index.html"> <img src="../images/button-php-back-yellow.svg"/> </a>
</body>
</html>