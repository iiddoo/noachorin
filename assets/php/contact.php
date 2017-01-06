<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'noachorin@gmail.com';
	$subject = $name .'  ---  sent you a message from your website';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'THANK YOU!  Message sent Successfully';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to noachorin@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>