<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = '1hk20cs056@hkbk.edu.in'; // replace with your email address
    $subject = 'New message from your website';
    $message = $_POST['message'];
    $headers = "From: {$_POST['email']}\r\n"
             . "Reply-To: {$_POST['email']}\r\n"
             . "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for your message!';
    } else {
        echo 'Unable to send email. Please try again later.';
        error_log(error_get_last()['message']);
    }
}
?>
