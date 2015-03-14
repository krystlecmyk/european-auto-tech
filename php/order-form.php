<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Order parts form</title>
<link rel="stylesheet" href="../styles/style-php.css"/>
</head>

<body>
<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$vin = $_POST['vin'];
    $email = $_POST['email'];
	$vehicle = $_POST['vehicle'];
    $message = $_POST['message'];
    $from = 'From: Website Order Form'; 
    $to = 'krystlecmyk@gmail.com, krystlecmyk@hotmail.com'; 
    $subject = 'Website Order Form';
    $human = $_POST['human'];
			
    $body = "From: $name\n Phone: $phone\n Vin: $vin\n E-Mail: $email\n Vehicle: $vehicle\n Message:\n $message";
				
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
	<a href="../index.html"> <img src="../images/button-php-back-yellow.svg"/> </a>
</body>
</html>