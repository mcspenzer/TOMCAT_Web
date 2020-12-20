<?php

if (!isset($_POST['user-id'])) {
    die("No user id");
    $_POST = array();
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $userId = mysqli_real_escape_string($database, $_POST['user-id']);

    $sql_delete = "UPDATE users SET user_is_archived = 1 WHERE user_id = " . $userId;

    if (mysqli_query($database, $sql_delete)) {
        echo "User archiving success";
    } else {
        echo "User update failed: " . mysqli_error($database);
        echo "SQL: " . $sql_update;
    }

    $_POST = array();
}