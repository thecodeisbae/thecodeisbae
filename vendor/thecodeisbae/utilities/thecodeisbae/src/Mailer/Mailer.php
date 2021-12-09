<?php

namespace thecodeisbae\Mailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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

            if($cc)
            {
                switch(gettype($cc))
                {
                    case 'string':
                        $mail->addCC($cc);
                        break;
                    case 'array':
                        foreach ($cc as $copy) {
                            $mail->addCC($copy);
                        }
                        break;
                }
            }

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