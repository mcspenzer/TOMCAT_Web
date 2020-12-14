<?php

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

$sql_select = "SELECT u.*, r.role_name FROM users u LEFT JOIN user_roles r ON u.user_role = r.role_id WHERE user_id != -1 AND user_is_archived != 1";

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