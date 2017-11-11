<?php

$msg = (isset($_POST['Comment']) ? $_POST['Comment'] : null);
$name = (isset($_POST['Name']) ? $_POST['Name'] : null);
$email = (isset($_POST['Email']) ? $_POST['Email'] : null);
$fullmsg = $msg . "\r\nFrom " . $name;
$subject = $email . " via Mow.ing";

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: ' . $msg . ' ' . '<' . $email . '>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

mail("melguna@gmail.com", $subject, $fullmsg, $headers);

?>