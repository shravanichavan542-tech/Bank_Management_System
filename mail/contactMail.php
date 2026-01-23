<?php 

    require 'PHPMailerAutoload.php';
    
    function contactMail($subject, $body, $Email, $name){

    
    $mail  = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username = 'shubhangibhapkar35@gmail.com';
    $mail->Password='seomywerkdnuzcds';

    $mail->setFrom("shubhangibhapkar35@gmail.com", "Sky Bank");
    $mail->addAddress("shubhangibhapkar35@gmail.com");
    $mail->addReplyTo("shubhangibhapkar35@gmail.com");

    $mail->isHTML(true);
    $mail->Subject="$subject";
    $mail->Body="<p>Email From: $name</p> <p>Email Address: $Email</p> <p>$body</p>";

    if(!$mail->send()){
        return "fail";
    }
    else{
        return "success";
    }

    }

?>
