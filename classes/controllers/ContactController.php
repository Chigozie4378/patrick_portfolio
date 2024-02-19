<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{
    public $nameErr = "";
    public $emailErr = "";
    public $subjectErr = "";
    public $messageErr = "";
    public function store()
    {
        if (isset($_POST["send"])) {
            if (!($_POST["name"])) {
                $this->nameErr = "Name is Required";
                $error = true;
            } else {
                $name = Validate::valInput($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $this->nameErr = "Only letters and white space allowed";
                    $error = true;
                }
            }

            if (empty($_POST["email"])) {
                $this->emailErr = "Email is required";
                $error = true;
            } else {
                $email = Validate::valInput($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->emailErr = "Invalid email format";
                    $error = true;
                }
            }

            if (empty($_POST["subject"])) {
                $this->subjectErr = "Subject is Required";
                $error = true;
            } else {
                $subject = Validate::valInput($_POST["subject"]);
            }
            if (empty($_POST["message"])) {
                $this->messageErr = "Message is Required";
                $error = true;
            } else {
                $message = Validate::valInput($_POST["message"]);
            }
            if (!$error) {
                // Email address where the message will be sent
                $to = 'ezesunday4378@gmail.com';

                // Instantiate PHPMailer
                $mail = new PHPMailer(true);


                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; // Your SMTP server
                    $mail->SMTPAuth = true;
                    $mail->Username = 'ezesunday4378@gmail.com';
                    $mail->Password = 'Sunny4378';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587; // Adjust this if needed

                    // Sender and recipient
                    $mail->setFrom($email, $name);
                    $mail->addAddress($to);

                    // Email content
                    $mail->isHTML(true);
                    $mail->Subject = $subject;
                    $mail->Body = "
            <h2>New Message From Website Contact Form</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br> $message</p>
        ";

                    // Send email
                    $mail->send();
                    echo '<div class="alert alert-success">Your message has been sent successfully!</div>';
                } catch (Exception $e) {
                    echo '<div class="alert alert-danger">There was an error sending your message. Please try again later.</div>';
                }
            }
        }
    }
}
