<?php

if (!isset($_POST['user-id'])) {
    echo "No user id";
} else if (!is_numeric($_POST['user-id'])) {
    echo "Invalid user id";
} else {

    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $userId = mysqli_real_escape_string($database, $_POST['user-id']);

    $sql_select = "SELECT * FROM users WHERE user_id = " . $userId;

    $sql_resultSet = mysqli_query($database, $sql_select);

    if (!isset($sql_resultSet)) {
        echo "Error fetching users";
    } else {
        if (mysqli_num_rows($sql_resultSet) == 0) {
            echo "No users yet";
        } else {
            $jsonArray = array();

            while ($row = mysqli_fetch_assoc($sql_resultSet)) {
                array_push($jsonArray, $row);
            }

            echo json_encode($jsonArray);
        }
    }
}
