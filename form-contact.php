<?php

	$to = "dogotar777@gmail.com";  // Your email here
	$from = 'email';
	$name = 'name';
	$phone = 'phone';
	$message = 'message';
	$headers = "From: $from";
	$subject = "Contact Form from 'Heating and Conditioning' Website";

	$fields = array();
	$fields{"name"} = "First name";
	$fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
	$fields{"message"} = "Message";


	$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers);

?>