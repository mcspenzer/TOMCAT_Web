<?php

require '../../vendor/autoload.php';

if (!isset($_POST['user-id'])) {
    die("No user id");
    $_POST = array();
} else {
    if (!isset($_POST['password'])) {
        die("No password set");
        $_POST = array();
    } else {
        if (!isset($_POST['confirm-password'])) {
            die("Need to confirm password");
            $_POST = array();
        } else {
            if ($_POST['password'] != $_POST['confirm-password']) {
                die("Password must match");
                $_POST = array();
            } else {
                continueProcess();
            }
        }
    }
    
}

function continueProcess()
{
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');
    mysqli_set_charset($database, 'utf8');

    $userId = $_POST['user-id'];

    // var_dump($userId);

    $password = $_POST['password'];
    
    // var_dump($password);

    $hash = trim(PHPassLib\Hash\BCrypt::hash($password, array ('rounds' => 16)));

    // var_dump($hash);

    $sql_update = "UPDATE users SET user_password = ?, user_date_modified = now() WHERE user_id = ?";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_update)) {
        die(mysqli_error($database));
        $_POST = array();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $hash, $userId);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "Password change success";
    } else {
        echo "User update failed: " . mysqli_error($database);
        echo "SQL: " . $sql_update;
    }

    $_POST = array();
}
