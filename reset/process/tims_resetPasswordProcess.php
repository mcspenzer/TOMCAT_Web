<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../assets/ext/phpmailer/Exception.php';
require '../../assets/ext/phpmailer/PHPMailer.php';
require '../../assets/ext/phpmailer/SMTP.php';

if (!isset($_POST['user-email'])) {
    echo 'No Email specified';
} else {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = 'localhost/tomcat_web/reset/tims_changePassword.php?selector=' . $selector . '&validator=' . bin2hex($token);

    $expiry = date("U") + 1800;

    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $userEmail = $_POST['user-email'];

    $sql = "DELETE FROM resets WHERE reset_email = ?";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die('Prepare failed');
    } else {
        mysqli_stmt_bind_param($stmt, 's', $userEmail);

        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO resets (reset_email, reset_selector, reset_token, reset_expiry) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die('Prepare failed');
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, 'ssss', $userEmail, $selector, $hashedToken, $expiry);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);

    mysqli_close($database);

    $mail = new PHPMailer;

    //Enable SMTP debugging. 
    // $mail->SMTPDebug = 3;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "timsresets@gmail.com";
    $mail->Password = "Tims@2020";
    //If SMTP requires TLS encryption then set it
    //$mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to 
    $mail->Port = 587;

    $mail->From = "timsresets@gmail.com";
    $mail->FromName = "TIMS Reset";

    $mail->smtpConnect(
        array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        )
    );

    $mail->addAddress($userEmail);

    $mail->isHTML(true);

    $mail->Subject = 'TIMS | Reset Password';
    $mail->Body = '<p>We have received a password reset request. Please use the link below to reset your password. If you did not make this request, please ignore this email.</p>';
    $mail->Body .= '<p>Password Reset Link: </br>';
    $mail->Body .= '<a href="' . $url . '">' . $url . '</a></p>';
    $mail->AltBody = "We have received a password reset request. Please use the link below to reset your password. If you did not make this request, please ignore this email. Password Reset Link: $url";

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo 'Email reset link sent';
    }
}
