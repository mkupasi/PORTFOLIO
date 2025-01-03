<?php
 include 'db.php';  

require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation
    $errors = [];

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email address is required.';
    }

    if (empty($message)) {
        $errors[] = 'Message cannot be empty.';
    }

    // If there are errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        echo "<a href='contacts.php'>Go Back</a>";
        exit;
    }

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2; // Enable detailed debug output


    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('EMAIL_USERNAME'); // Your Gmail address from environment variable
        $mail->Password = getenv('EMAIL_PASSWORD'); // Your Gmail password from environment variable
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        
        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('mkupasiaugustine@gmail.com'); // Your email address
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body = "You have received a new message from your contact form.\n\n";
        $mail->Body .= "Name: $name\n";
        $mail->Body .= "Email: $email\n";
        $mail->Body .= "Message:\n$message\n";

        $mail->send();
        echo "<p style='color: green;'>Message sent successfully! We will get back to you soon.</p>";
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        echo "<p style='color: red;'>Failed to send the message. Please try again later.</p>";
        echo "<a href='contacts.php'>Go Back</a>";
    }
} else {
    // Redirect if the file is accessed directly
    header('Location: contacts.php');
    exit;
}
?>
