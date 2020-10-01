<?php

require 'phpmailer/PHPMailerAutoload.php';



$mail = new PHPMailer;

// $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username= 'sendmailfrom80@gmail.com';
$mail->Password = 'popsot123';

$mail->setFrom('sendmailfrom80@gmail.com', 'Venta');
$mail->addAddress('bhagabatiprasada@gmail.com');
$mail->addReplyTo('sendmailfrom80@gmail.com');


// Get data from from
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$email = htmlspecialchars($_POST["email"], ENT_QUOTES);
$mobile = htmlspecialchars($_POST["mobile"], ENT_QUOTES);
$subject = htmlspecialchars($_POST["subject"], ENT_QUOTES);
$message = htmlspecialchars($_POST["message"], ENT_QUOTES);

if (empty($name) || empty($email) || empty($subject) || empty($message)) {
	header("Location: /?mailsend=failed&message=fill-required-fields");
	exit();
} else {
	$mail->isHTML(true);
	$mail->Subject = 'Message from: Venta';
	$mail->Body = '<p><b>Name: </b><br />'.$name.'</p><p><b>Email: </b><br />'.$email.'</p><p><b>Mobile: </b><br />'.$mobile.'</p><p><b>Subject: </b><br />'.$subject.'</p><p><b>Message:</b><br />'.$message.'</p>';

	if (!$mail->send()) {
		header("Location: /?mailsend=failed");
		exit();
	} else {
		header("Location: /?mailsend=success");
		exit();
	}
}

?>