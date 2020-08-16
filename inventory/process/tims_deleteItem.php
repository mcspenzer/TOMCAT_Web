<?php

if (!isset($_POST['item-id'])) {
    die("No item id");
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $itemId = mysqli_real_escape_string($database, $_POST['item-id']);

    $sql_delete = "DELETE FROM items WHERE item_id = " . $itemId;

    if (mysqli_query($database, $sql_delete)) {
        echo "Item deletion success";
    } else {
        echo "Item update failed: " . mysqli_error($database);
        echo "SQL: " . $sql_update;
    }
}