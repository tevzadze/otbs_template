<?php 
	if(isset($_POST['email'])){
		$to = "test@test.com"; // this is your Email address
		$email = $_POST['email']; // this is input
		$usermessage = $_POST['messages']; // this is input
		$subject = "Form submission";
		$message = "\n\nNew subscribe: " .$email. "\n\nMessage: " .$usermessage."\n\n";
		$headers = "Test Project"; // this is title
			mail($to,$subject,$message,$headers);
		}
?>