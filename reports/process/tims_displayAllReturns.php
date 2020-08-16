<?php

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

$sql_select = "SELECT b.return_log_id, b.return_log_date_created, i.item_name, CONCAT(u.user_last_name, ', ', u.user_first_name) AS \"item_returner\"
FROM return_log b
    LEFT JOIN items i ON b.return_log_item_returned = i.item_id
    LEFT JOIN users u ON b.return_log_item_returner = u.user_id";

$sql_resultSet = mysqli_query($database, $sql_select);

if (!isset($sql_resultSet)) {
    echo "Error fetching items";
} else {
    if (mysqli_num_rows($sql_resultSet) == 0) {
        echo "No returns yet";
    } else {
        $jsonArray = array();

        while ($row = mysqli_fetch_assoc($sql_resultSet)) {
            array_push($jsonArray, $row);
        }

        echo json_encode($jsonArray);
    }
}
