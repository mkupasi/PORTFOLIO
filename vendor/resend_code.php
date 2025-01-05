<?php
// Include database connection
include_once 'db.php';

// Function to resend verification code
function resendVerificationCode($email) {
    global $conn;

    // Generate a new verification code
    $verification_code = rand(100000, 999999);

    // Update the verification code in the database
    $stmt = $conn->prepare("UPDATE users SET verification_code = ? WHERE email = ?");
    $stmt->bind_param("is", $verification_code, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Send the verification code to the user's email
        mail($email, "Your Verification Code", "Your verification code is: $verification_code");

        return "Verification code has been resent to your email.";
    } else {
        return "Failed to resend verification code. Please try again.";
    }
}

// Check if the email is provided
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo resendVerificationCode($email);
} else {
    echo "Email is required.";
}
?>