<!DOCTYPE html>
<html>
<head>
	<title>Thank you</title>
</head>
<body>
     <?php
     		$to = "kinshuksingh1234@gmail.com";
     		$subject = "website-query";
     		$name = $_REQUEST['name'];
     		$email = $_REQUEST['email'];
     		$message = $_REQUEST['message'];
     		$headers = "From: $name";
     		$sent = mail($to, $subject, $message, $headers);
     		if($sent)
     			//{print( '<a href="http://www.kinshuk-singh.com/index.html">Thank you! I will get back to you shortly. Click here to return to homepage</a>');}
                    include('thank-you.html');
     		else
     			//{ print( 'There was an error! Try again later.');}
                    include('error.html');
     ?>
</body>
</html>

