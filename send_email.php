<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 



require 'vendor/autoload.php';




        $mail = new PHPMailer(true);
        $name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        
        
            //Konfigurasi Server Email
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'lumintulogic2022@gmail.com';
            $mail->Password   = 'sadev2022';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 587;
         
            //Penerima
            $mail->setFrom($email,'landingpage');
            $mail->addAddress('lumintulogic2022@gmail.com',$message);
        
        
            $mail->addReplyTo($email);
         
            // Konten Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = '<b>'.$name.'</b>'.'<p>'.$message.'</p>';
            $mail->send();


 


?>