<?php

require '../../vendor/autoload.php';

if (!isset($_POST['selector'])) {
    die('No selector');
}

if (!isset($_POST['validator'])) {
    die('No validator');
}

if (!isset($_POST['new-password'])) {
    die('No password');
}

if (!isset($_POST['confirm-new-password'])) {
    die('No password confirmation');
}

$selector = $_POST['selector'];
$validator = $_POST['validator'];
$newPassword = $_POST['new-password'];
$confirmNewPassword = $_POST['confirm-new-password'];

var_dump($selector);
var_dump($validator);
var_dump($newPassword);
var_dump($confirmNewPassword);

if ($newPassword != $confirmNewPassword) {
    die('Password does not match');
}

$currentDate = date('U');

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');
mysqli_set_charset($database, 'utf8');

$sql = "SELECT * FROM resets WHERE reset_selector = ? AND reset_expiry >= $currentDate";

$stmt = mysqli_stmt_init($database);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die('Prepare failed 1' . ' ' . mysqli_stmt_error($stmt));
} else {
    mysqli_stmt_bind_param($stmt, 's', $selector);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (!$row = mysqli_fetch_assoc($result)) {
        die('No token found');
    } else {
        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $row['reset_token']);

        if ($tokenCheck === false) {
            die('Token invalid');
        } elseif ($tokenCheck === true) {
            $tokenEmail = $row['reset_email'];

            $sql = "SELECT * FROM users WHERE user_email = ?";

            $stmt = mysqli_stmt_init($database);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                die('Prepare failed 2');
            } else {
                mysqli_stmt_bind_param($stmt, 's', $tokenEmail);
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);

                if (!$row = mysqli_fetch_assoc($result)) {
                    die('No reset request found for user');
                } else {

                    $password_hashed = trim(PHPassLib\Hash\BCrypt::hash($newPassword, array ('rounds' => 16)));
                    // $password_hashed = md5($newPassword);

                    $sql = 'UPDATE users SET user_password = ?, user_date_modified = now() WHERE user_email = ?';

                    $stmt = mysqli_stmt_init($database);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        die('Prepare failed 3');
                    } else {
                        mysqli_stmt_bind_param($stmt, 'ss', $password_hashed, $tokenEmail);
                        mysqli_stmt_execute($stmt);

                        $sql = "DELETE FROM resets WHERE reset_email = ?";

                        $stmt = mysqli_stmt_init($database);

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            die('Prepare failed 4');
                        } else {
                            mysqli_stmt_bind_param($stmt, 's', $tokenEmail);

                            mysqli_stmt_execute($stmt);

                            echo 'Password reset successful';
                        }
                    }
                }
            }
        }
    }
}
