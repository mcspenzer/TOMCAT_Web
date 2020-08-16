<?php

// var_dump ($_POST);

if (!isset($_POST['edit-item-id'])) {
    die('No item id');
} else if(!isset($_POST['edit-serial-number'])) {
    die('No serial number');
} else if(!isset($_POST['edit-item-name'])) {
    die('No item name');
} else if(!isset($_POST['edit-item-type'])) {
    die('No item type');
} else if(!isset($_POST['edit-item-owner-select'])) {
    die('No item owner');
} else {
    $item_id = $_POST['edit-item-id'];
    $item_serialNumber =$_POST['edit-serial-number']; 
    $item_name = $_POST['edit-item-name']; 
    $item_type = $_POST['edit-item-type']; 
    $item_owner = $_POST['edit-item-owner-select']; 

    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $sql_update = "UPDATE items SET 
        item_serial_number = ?,
        item_name = ?,
        item_type = ?,
        item_owner = ?,
        item_date_modified = now()

        WHERE item_id = ?";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_update)) {
        die (mysqli_error($database));
    } else {
        mysqli_stmt_bind_param($stmt, "ssssi", $item_serialNumber, $item_name, $item_type, $item_owner, $item_id);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "Item update success";
    } else {
        echo "Item update failed";
    }
}