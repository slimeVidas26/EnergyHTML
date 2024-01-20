<?php

	$to = "dogotar777@gmail.com";  // Your email here
	$from = 'email';
	$name = 'name';
	$phone = 'phone';
	$message = 'message';
	$headers = "From: $from";
	$subject = "Appointment Form popup from 'Heating and Conditioning' Website";

	$fields = array();
	$fields{"name"} = "Your name";
	$fields{"email"} = "Your e-mail";
	$fields{"address"} = "Address";
	$fields{"select-services"} = "Type of service needed";
	$fields{"date-services"} = "Requested date of service?";
	$fields{"time-services"} = "Requested time of service?";


	$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers);

?>