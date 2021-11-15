<?php

namespace thecodeisbae\Mailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require _VENDOR_PATH.'autoload.php';


class Mailer
{
    static function send($to,$subject,$body,$attachmentPath,$attachment,$cc='')
    {
        $params = getParams();
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = $params->email->SMTPDebug;                    
            $mail->isSMTP();                                           
            $mail->Host       = $params->email->SMTPHost;                    
            $mail->SMTPAuth   = $params->email->SMTPAuth;                                  
            $mail->Username   = $params->email->SMTPUser;                     
            $mail->Password   = $params->email->SMTPPass;                              
            $mail->SMTPSecure = $params->email->SMTPSecure;          
            $mail->Port       = $params->email->SMTPPort;                                  

            //Recipients
            $mail->setFrom($params->email->SMTPUser, $params->email->Service);
            $mail->addAddress($to);   

            if($attachmentPath && $attachment)
            //Add attachments
                $mail->addAttachment($attachmentPath,$attachment);   

            //Content
            $mail->isHTML(true);                                
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();
            return true;
        } catch (Exception $ex) {
            debug($ex);
            return false;
        }
    }
}