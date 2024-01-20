<?php

	$to = "dogotar777@gmail.com";  // Your email here
	$from = 'email';
	$headers = "From: $from";
	$subject = "Newsletter Subscribe Form from 'Heating and Conditioning' Website";

	$fields = array();
	$fields{"email"} = "Email";


	$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

	$send = mail($to, $subject, $body, $headers);

?>