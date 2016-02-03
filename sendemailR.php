<?php
        header('Content-type: application/json');
        $status = array(
                'type'=>'success',
                'message'=>'Thank you for contact us. As early as possible  we will contact you '
        );
    $mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.gmail.com"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "tremblerz"; // SMTP account username
$mail->Password   = "R}h-6xG8zq)4";        // SMTP account passwor
 
    $firstname = @trim(stripslashes($_POST['firstname']));
    $lastname = @trim(stripslashes($_POST['lastname']));
    $institutename = @trim(stripslashes($_POST['institutename']));
    $email = @trim(stripslashes($_POST['email']));
    $phone = @trim(stripslashes($_POST['phone']));

    $email_from = $email;
    $email_to = 'tremblerz@gmail.com';//replace with your email
    $subject = 'New registration from '.$firstname
    $body = 'Name: ' . $firstname . " " . $secondname . "\n\n" . 'Email: ' . $email . "\n\n" . 'email: ' . $email . "\n\n" . 'phone' . $phone;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;


