<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Order parts form</title>
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
				
    if ($_POST['submit'] && $human == '3') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '3') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
</body>
</html>