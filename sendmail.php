<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Recipient
    $to = 'jissglobosoft@gmail.com';  

    // PHPMailer setup
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'jisstech617@gmail.com';  
        $mail->Password = 'mgpqmpjpxclspmad';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email headers
        $mail->setFrom('noreply@keralatravels.in', 'Website Enquiry');
        $mail->addAddress($to);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from ' . $name;
        $mail->Body = "<html>
                        <head><title>Contact Form Submission</title></head>
                        <body>
                            <h3>Contact Details</h3>
                            <table border='1' cellpadding='10'>
                                <tr><td><strong>Name</strong></td><td>$name</td></tr>
                                <tr><td><strong>Email</strong></td><td>$email</td></tr>
                                <tr><td><strong>Message</strong></td><td>$message</td></tr>
                            </table>
                        </body>
                       </html>";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

        // Send
        if ($mail->send()) {
            header("Location: thanks.php");
        } else {
            echo "Error sending email.";
        }

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

} else {
    echo "Invalid request method.";
}
