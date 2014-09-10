<?php

if(isset($_POST)) {
	
	$to = "jocelyn.palacki@gmail.com";
	$subject = $_POST['subject'];
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$message = $_POST['message'];

	$headers = 'From: WCFdesign.com'."\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	 
	$body = "From:".$name_field."\n E-Mail:".$email_field."\n Message:\n".$message;
 
	
	
	//Submit form
	mail($to, $subject, $body, $headers);

	echo "Data has been submitted to $to!";
}else {
 echo "There was an error!";
}


?>