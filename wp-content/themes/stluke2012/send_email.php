<?php
if (isset($_REQUEST['submit'])){

	$date		=	date('Y');
	$one		=	1;
	$datefunction =	$date - $one;
  
	$email_to	=	'leads@breakthroughmarketingteam.com, justinyovino@yahoo.com'; //the address to which the email will be sent
    $name		=	$_POST['name'];
    $address	=	$_POST['address'];
    $phone		=	$_POST['phone'];
    $email		=   $_POST['email'];
    $procedures	=	$_POST['procedures'];
    $senddate = date('M j, Y H:i');
    $subject	=	"Contact Form Submittal from YovinoMD.com on $senddate";
    $message1	=	$_POST['message'];
    $antispam	=	$_POST['antispam'];
    $message	=	stripslashes("Interested in: $procedures\n\nMessage:\n$message1\n\nName: $name\n\nAddress:\n$address\n\nPhone: $phone\nEmail: $email");
	$confirmationmessage = stripslashes("The following information was submitted directly to Dr. Justin Yovino.  Please allow him 24 hours to reply and add info@yovinomd.com to your address book.  \n\n*********************************\nInterested in: $procedures\n\nMessage:\n$message1\n\nName: $name\n\nAddress:\n$address\n\nPhone: $phone\nEmail: $email");
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email provider will know who are we replying to. */
    $headers  = "From: webmaster@yovinomd.com\r\n";
    $headers .= "Reply-To: $email\r\n";
  
  if($antispam != $datefunction){

	   echo 'Please Enter Correct Last Year';

	}else if($antispam == $datefunction){

     mail($email_to,$subject,$message,$headers);
	 mail($email,$subject,$confirmationmessage,$headers);
	 header('Location: http://www.yovinomd.com/md/thank-you/');
	}else{

     echo 'fail'; 

  }

}  
?>