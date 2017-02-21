<?php
	echo "Test";
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$from = 'Contact Form'; 
		$to = 'jmamaril25@gmail.com';
		
		$body ="From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
		mail($to, $subject, $message, "From: " . $name);

		echo "Message Sent!";
	}
?>