<?php

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

$sql_select = "SELECT b.borrow_log_id, b.borrow_log_date_created, i.item_name, CONCAT(u.user_last_name, ', ', u.user_first_name) AS \"item_borrower\" , b.borrow_log_item_borrower_external
    FROM borrow_log b
    LEFT JOIN items i ON b.borrow_log_item_borrowed = i.item_id
    LEFT JOIN users u ON b.borrow_log_borrower = u.user_id
    ORDER BY b.borrow_log_date_created DESC";

$sql_resultSet = mysqli_query($database, $sql_select);

if (!isset($sql_resultSet)) {
    echo "Error fetching items";
} else {
    if (mysqli_num_rows($sql_resultSet) == 0) {
        echo "No borrows yet";
    } else {
        $jsonArray = array();

        while ($row = mysqli_fetch_assoc($sql_resultSet)) {
            array_push($jsonArray, $row);
        }

        echo json_encode($jsonArray);
    }
}
