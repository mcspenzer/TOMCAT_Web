<?php

if (!isset($_POST['user-id'])) {
    die("No user id");
} else {
    if (!isset($_POST['password'])) {
        die("No password set");
    } else {
        if (!isset($_POST['confirm-password'])) {
            die("Need to confirm password");
        } else {
            if ($_POST['password'] != $_POST['confirm-password']) {
                die("Password must match");
            } else {
                continueProcess();
            }
        }
    }
    
}

function continueProcess()
{
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $userId = mysqli_real_escape_string($database, $_POST['user-id']);

    $password = mysqli_real_escape_string($database, $_POST['password']);
    $hashed_password = md5($password);

    $sql_update = "UPDATE users SET user_password = '" . $hashed_password . "', user_date_modified = now() WHERE user_id = '" . $userId . "'";

    if (mysqli_query($database, $sql_update)) {
        echo "Password change success";
    } else {
        echo "User update failed: " . mysqli_error($database);
        echo "SQL: " . $sql_update;
    }
}
