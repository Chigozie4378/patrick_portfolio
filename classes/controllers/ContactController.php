<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller
{

    public $nameErr = "";
    public $emailErr = "";
    public $subjectErr = "";
    public $messageErr = "";
    public $success = "";
    
    public function store()
    {


        if (file_exists("../vendor/autoload.php")) {
            require '../vendor/autoload.php';
        } elseif (file_exists("./vendor/autoload.php")) {
            require './vendor/autoload.php';
        }

        if (isset($_POST["send"])) {
            $error = false;

            if (empty($_POST["name"])) {
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
                // User email
                $user_email = $email;

                // Instantiate PHPMailer for user email
                $user_mail = new PHPMailer(true);

                try {
                    // Server settings
                    $user_mail->isSMTP();
                    $user_mail->Host = 'smtp.gmail.com'; // Your SMTP server
                    $user_mail->SMTPAuth = true;
                    $user_mail->Username = 'ezesunday4378@gmail.com';
                    $user_mail->Password = 'hejnffxctbqgkcgl';
                    $user_mail->SMTPSecure = 'ssl';
                    $user_mail->Port = 465; // Adjust this if needed

                    // Sender and recipient for user email
                    $user_mail->setFrom('ezesunday4378@gmail.com');
                    $user_mail->addAddress($user_email);

                    // User email content


                    $user_mail->isHTML(true);
                    $user_mail->Subject = "Thank you for your message";
                    $user_mail->Body = "
                    <h2>Thank you for contacting us!</h2>
                    <p>We have received your message and will get back to you as soon as possible.</p>
                    <p>Meanwhile, you might be interested in checking out our other services:</p>
                 
                ";

                    // Send user email
                    $user_mail->send();
                    $this->success = '<div class="alert alert-success">Your message has been sent successfully!</div>';
                } catch (Exception $e) {
                    echo '<div class="alert alert-danger">There was an error sending your message. Please try again later.</div>';
                }

                // Website owner email
                $owner_email = 'ezesunday4378@gmail.com';

                // Instantiate PHPMailer for website owner email
                $owner_mail = new PHPMailer(true);

                try {
                    // Server settings
                    $owner_mail->isSMTP();
                    $owner_mail->Host = 'smtp.gmail.com'; // Your SMTP server
                    $owner_mail->SMTPAuth = true;
                    $owner_mail->Username = 'ezesunday4378@gmail.com';
                    $owner_mail->Password = 'hejnffxctbqgkcgl';
                    $owner_mail->SMTPSecure = 'ssl';
                    $owner_mail->Port = 465; // Adjust this if needed

                    // Sender and recipient for website owner email
                    $owner_mail->setFrom('ezesunday4378@gmail.com');
                    $owner_mail->addAddress($owner_email);

                    // Website owner email content
                    $owner_mail->isHTML(true);
                    $owner_mail->Subject = $subject;
                    $owner_mail->Body = "
                    <h2>New Message From Website Contact Form</h2>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $user_email</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong><br> $message</p>
                ";

                    // Send website owner email
                    $owner_mail->send();
                } catch (Exception $e) {
                    // Handle exception
                }
                $this->insert('contact', $name,$email,$subject, $message);
            }else{
                echo "<script>alert('Message not Submitted Check for any Error')</script>";
            }
        }
    }
}
