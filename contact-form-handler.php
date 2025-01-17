<?php
// Include PHPMailer files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Use PHPMailer namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = nl2br(htmlspecialchars($_POST['message']));

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bentennyson2705@gmail.com';
        $mail->Password = 'hfgickkzwkuhblye';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Admin email (send email to admin)
        $mail->setFrom($email, $username);
        $mail->addAddress('bentennyson2705@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
        <html>
        <head>
            <style>
                body { font-family: 'Poppins', sans-serif; color: #333; }
                .container { padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
                h2 { color: #555; }
                p { line-height: 1.6; }
                .footer { margin-top: 20px; font-size: 0.9em; color: #777; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>New Message from $username</h2>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong><br>$message</p>
                <div class='footer'>
                    <p>This message was sent from the Akansh Digital contact form.</p>
                </div>
            </div>
        </body>
        </html>";

        $mail->send();

        // Send a thank-you email to the user
        $mail->clearAddresses();
        $mail->addAddress($email, $username);

        $mail->Subject = "Thank you for contacting Akansh Digital!";
        $mail->Body = "
        <html>
        <head>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    color: #333;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .container {
                    padding: 30px;
                    border: 2px solid #27ae60;
                    border-radius: 15px;
                    background: #fff;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                    max-width: 600px;
                    text-align: center;
                }
                h2 {
                    color: #27ae60;
                    font-size: 28px;
                }
                p {
                    line-height: 1.8;
                    font-size: 16px;
                }
                strong {
                    color: #e74c3c;
                }
                strong a {
                    text-decoration: none;
                    color: #e74c3c;
                }
                .footer {
                    margin-top: 20px;
                    font-size: 14px;
                    color: #777;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>Thank You, $username!</h2>
                <p>We appreciate you reaching out to Akansh Digital. Our team specializes in NFC and digital card creation, as well as social media marketing strategies to help grow your business.</p>
                <p>We’ll get back to you shortly with more details. If you have any urgent queries, feel free to call us at <strong><a href='tel:7990098573'>+91 79900 98573</a></strong>.</p>
                <p>Looking forward to collaborating with you!</p>
                <div class='footer'>
                    <p>Best Regards, <br> The Akansh Digital Team</p>
                </div>
            </div>
        </body>
        </html>";        

        $mail->send();

        header("Location: Thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
