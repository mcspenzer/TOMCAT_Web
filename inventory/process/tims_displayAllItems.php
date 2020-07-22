<?php

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

$sql_select = "SELECT 
    i.item_id,
    i.item_serial_number,
    i.item_name,
    i.item_type,
    itemstatus.item_status_name AS \"item_status\",
    CONCAT(u.user_last_name, ', ', u.user_first_name) AS \"item_owner\",
    i.item_date_created,
    i.item_date_modified 

    FROM items i 

    LEFT JOIN users u ON i.item_owner = u.user_id
        
    LEFT JOIN item_status itemstatus  ON i.item_status = itemstatus.item_status_id";

$sql_resultSet = mysqli_query($database, $sql_select);

if (!isset($sql_resultSet)) {
    echo "Error fetching items";
} else {
    if (mysqli_num_rows($sql_resultSet) == 0) {
        echo "No items yet";
    } else {
        $jsonArray = array();

        while ($row = mysqli_fetch_assoc($sql_resultSet)) {
            array_push($jsonArray, $row);
        }

        echo json_encode($jsonArray);
    }
}
