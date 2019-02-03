<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send(array $data) {

$email = new PHPMailer(true);       // Passing 'true' enables exceptions
try {

  	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'PLAIN';
	$email->isSMTP();
	$email->Host = 'smtp.mailtrap.io';
	$email->Port = 465;
	$email->SMTPAuth = true;
	$email->Username = '246f95e2f537db';
	$email->Password = '821fcd2266fcc8';
	$email->isHTML(true);
	$email->setFrom('assuncaofilipe@outlook.com','Filipe');
	$email->FromName = $data['quem'];
	$email->addAddress($data['para']);
	$email->Body = $data['menssagem'];
	$email->Subject = $data['assunto'];
	$email->MsgHTML($data['menssagem']);
	//$email->SMTPSecure = false;
	$email->SMTPAutoTLS = false;

	return $email->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $email->ErrorInfo;
}
}
?>
