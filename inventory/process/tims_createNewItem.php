<?php

if (!isset($_POST['serial-number'])) {
    echo "No serial number";
} else if (!isset($_POST['item-name'])) {
    echo "No item name";
} else if (!isset($_POST['item-type'])) {
    echo "No item type";
} else if (!isset($_POST['item-owner'])) {
    echo "No item owner";
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $serial_number = mysqli_real_escape_string($database, $_POST['serial-number']);
    $item_name = mysqli_real_escape_string($database, $_POST['item-name']);
    $item_type = mysqli_real_escape_string($database, $_POST['item-type']);
    $item_owner = mysqli_real_escape_string($database, $_POST['item-owner']);

    $sql_insert = "INSERT INTO items (
        item_serial_number, 
        item_name, 
        item_type, 
        item_status, 
        item_owner, 
        item_date_created, 
        item_date_modified
    ) VALUES (?,?,?,1,?,now(),now())";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_insert)) {
        die(mysqli_error($database));
    } else {
        mysqli_stmt_bind_param($stmt, "ssss", $serial_number, $item_name, $item_type, $item_owner);

        if (mysqli_stmt_execute($stmt)) {
            echo "Item creation success";
        } else {
            echo "Item creation failed";
        }
    }
}
