<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <title>Denzel Dalton</title>
</head>
<body onload="ChangeNavbarActive('contact')">
    <?php include_once("./navbar.php"); ?>
    <section>
        <h2>Let's Work Together!</h2>
        <form method="POST">
            <label for="fname">Please Enter Your Name:</label>
            <input type="text" id="fname" name="name" placeholder="Your name..">
      
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your message.." style="height:200px"></textarea>
      
            <input id="submit" type="submit" value="Submit">
        </form>
        <?php include_once("./footer.php"); ?>
    </section>
    <script src="./js/main.js"></script>
</body>

<?php
// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
require_once './vendor/autoload.php';
// create a new object
$mail = new PHPMailer(true);
// configure an SMTP
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Username = 'site.mailer.personal@gmail.com';
$mail->Password = 'rzmzjovwdsshxlxi';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

if($_POST) {
    $mail->setFrom('site.mailer.personal@gmail.com', 'Site Mailer');
    $mail->addAddress('denzel.r.dalton@gmail.com', 'My Inbox');
    $mail->Subject = "{$_POST['name']} Would like to talk to you";
    // Set HTML 
    $mail->isHTML(TRUE);
    $mail->Body = "<html>{$_POST['message']}</html>";
    $mail->AltBody = 'Form Message';
    if(!$mail->send()){
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
// set subject

// send the message
// For debuging
 ?>
</html>