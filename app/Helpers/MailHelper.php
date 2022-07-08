<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class MailHelper {
	
    public static function mail_send($email_message, $semail, $subject) {
        $mail = new PHPMailer(true);
		try {
			//Server settings
			
			/*$mail->SMTPDebug = SMTP::DEBUG_SERVER; */                     // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.sendgrid.net';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'apikey';                     // SMTP username
			$mail->Password   = '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';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = '587';          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('dipali@virtualheight.com', 'spaerousell');
			/*$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			$mail->addAddress('ellen@example.com');               // Name is optional*/
			
			$mail->addAddress($semail);
			
			$mail->addReplyTo('dipali@virtualheight.com', 'FreshKon Club');
			/*$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');*/

			// Attachments
			/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

			// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $email_message;
			/*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

			$mail->send();
			/*echo 'Message has been sent';*/
			} catch (Exception $e) {
				/*echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";*/
			}
    }
}
