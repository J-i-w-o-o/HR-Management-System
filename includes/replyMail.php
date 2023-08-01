<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
require_once 'mailConfig.php';

function sendAutoResponseEmail() {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;                              //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = SMTP_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom(SMTP_SENDER, 'recruitment-hr');
        $mail->addAddress($_POST['email'], $_POST['firstname']);     //Add a recipient         
        $mail->addReplyTo(SMTP_SENDER, 'Application-reply');
        $mail->addCC(SMTP_SENDER);

        //Content
        $mail->Subject = 'Thank you for your application';
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Body = '
            <html>
            <head><title>Auto-Response</title></head>
            <body>
            <p>Dear ' . $_POST['firstname'] . ',</p>
            <p>Thank you for submitting your application to Tigersmark. We have received your application and will review it carefully. If your qualifications match our requirements, we will be in touch shortly for further steps.</p>
            <p>Best regards,</p>
            <p>Tigersmark HR Team</p>
            </body>
            </html>';

        // Optionally, you can include a plain text version of the email as well
        $mail->AltBody = 'Dear ' . $_POST['firstname'] . ',\n\n'
                        . 'Thank you for submitting your application to Tigersmark. We have received your application and will review it carefully. If your qualifications match our requirements, we will be in touch shortly for further steps.\n\n'
                        . 'Best regards,\n'
                        . 'Tigersmark HR Team';

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
