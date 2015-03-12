<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact form</title>
</head>

<body>

<?php
	
	echo "asdf"
	
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Website Contact Form'; 
    $to = 'krystlecmyk@gmail.com, krystlecmyk@hotmail.com'; 
    $subject = 'Website Contact Form';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['contact-submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['contact-submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
</body>
</html>