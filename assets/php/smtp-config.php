<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require(__DIR__."/PHPMailer.php");
require(__DIR__."/Exception.php");

$PHPMailer = new PHPMailer();

/**********************************************
 * SMTP Settings
 *********************************************/
$PHPMailer->SMTPAuth = true;
$PHPMailer->Mailer = 'smtp'; // use from these (smpt, mail)
$PHPMailer->Host = 'smtp.gmail.com'; //SMTP Host
$PHPMailer->Port = '587'; //SMTP port goes here
$PHPMailer->SMTPSecure = 'tls'; //Encryption Type (ssl or tls)
$PHPMailer->Username = 'devogweb2021@gmail.com'; //Add your email
$PHPMailer->Password = 'uoawnuzhnepvjhis'; // Your email account password
$PHPMailer->From = $PHPMailer->Username;
$PHPMailer->Name = "Company"; //Company Name//
$PHPMailer->SMTPDebug = false;
// End of SMTP Settings

//Change Your Email
//$sendemail = 'support@cffunnelstemplates.com'; 
$sendemail = 'ratan@ogwebsolutions.com'; 
//Change Registration/Popup form Subject
$popupformsubject = "Book Funnel  - Registration Form Submission";
//Change Order Form Subject
$subject = "Book Funnel - Order Form Submission";