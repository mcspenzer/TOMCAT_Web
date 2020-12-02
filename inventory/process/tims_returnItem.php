<?php

if (!isset($_POST['return-log-item-returned'])) {
    die('No item');
} else if (!isset($_POST['return-log-returner'])) {
    die('No returner');
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $return_log_itemReturned = mysqli_real_escape_string($database, $_POST['return-log-item-returned']);
    $return_log_returner = mysqli_real_escape_string($database, $_POST['return-log-returner']);

    $sql_item = "SELECT * FROM items WHERE item_id = $return_log_itemReturned";

    $sql_resultSet = mysqli_query($database, $sql_item);

    $extBorrower = '';

    if (mysqli_num_rows($sql_resultSet) > 0) {
        while ($row = mysqli_fetch_assoc($sql_resultSet)) {
            $extBorrower = $row['item_borrower_external'];
        }
    }

    $sql_insert = "INSERT INTO return_log (
        return_log_item_returned,
        return_log_item_returner,
        return_log_date_created, 
        return_log_date_modified,
        return_log_item_returner_external
    ) VALUES (?,?,now(),now(),?)";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_insert)) {
        die(mysqli_error($database));
    } else {
        mysqli_stmt_bind_param($stmt, "iss", $return_log_itemReturned, $return_log_returner, $extBorrower);

        if (!mysqli_stmt_execute($stmt)) {
            die("Item return failed");
        } else {
            $sql_update = "UPDATE items SET 
                item_status = 1,
                item_borrower = 0,
                item_date_modified = now()

                WHERE item_id = ?";

            $stmt = mysqli_stmt_init($database);

            if (!mysqli_stmt_prepare($stmt, $sql_update)) {
                die(mysqli_error($database));
            } else {
                mysqli_stmt_bind_param($stmt, "i", $return_log_itemReturned);

                if (!mysqli_stmt_execute($stmt)) {
                    die("Item return failed");
                } else {
                    echo "Item return success";
                }
            }
        }
    }
}
