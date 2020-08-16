<?php

if (!isset($_POST['borrow-log-item-borrowed'])) {
    die('No item');
} else if (!isset($_POST['borrow-log-borrower'])) {
    die('No borrower');
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $borrow_log_itemBorrowed = mysqli_real_escape_string($database, $_POST['borrow-log-item-borrowed']);
    $borrow_log_borrower = mysqli_real_escape_string($database, $_POST['borrow-log-borrower']);

    $sql_insert = "INSERT INTO borrow_log (
        borrow_log_item_borrowed,
        borrow_log_borrower,
        borrow_log_date_created, 
        borrow_log_date_modified
    ) VALUES (?,?,now(),now())";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_insert)) {
        die(mysqli_error($database));
    } else {
        mysqli_stmt_bind_param($stmt, "is", $borrow_log_itemBorrowed, $borrow_log_borrower);

        if (!mysqli_stmt_execute($stmt)) {
            die("Item borrow failed");
        } else {
            $sql_update = "UPDATE items SET 
                item_status = 2,
                item_date_modified = now()

                WHERE item_id = ?";

            $stmt = mysqli_stmt_init($database);

            if (!mysqli_stmt_prepare($stmt, $sql_update)) {
                die(mysqli_error($database));
            } else {
                mysqli_stmt_bind_param($stmt, "i", $borrow_log_itemBorrowed);

                if (!mysqli_stmt_execute($stmt)) {
                    die("Item borrow failed");
                } else {
                    echo "Item borrow success";
                }
            }
        }
    }
}
