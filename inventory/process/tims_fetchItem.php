<?php
if (isset($_GET['query'])) {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $sql_select = "SELECT * FROM items WHERE item_status = 1";

    $sql_resultSet = mysqli_query($database, $sql_select);

    $object = new stdClass();

    if (!isset($sql_resultSet)) {
        $object->success = false;
        $object->results = "No results";
    } else {
        if (mysqli_num_rows($sql_resultSet) == 0) {
            $object->success = false;
            $object->results = "No results";
        } else {
            $object->success = true;
            $object->results = array();

            $objectInner = new stdClass();

            $pointer = 0;

            while ($row = mysqli_fetch_assoc($sql_resultSet)) {
                $objectInner->name = $row['item_serial_number'] . ": " . $row['item_name'];
                $objectInner->value = $row['item_id'];
                $objectInner->text = $row['item_serial_number'] . ": " . $row['item_name'];
                // array_push($object->results, $objectInner);

                $object->results[$pointer++] = $objectInner;
                $objectInner = new stdClass();
            }

            echo json_encode($object);
        }
    }
} else if (isset($_GET['return'])) {

    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $borrower = mysqli_real_escape_string($database, $_GET['return']);

    $sql_select = "SELECT * FROM items WHERE item_status = 2 AND item_borrower = $borrower";

    $sql_resultSet = mysqli_query($database, $sql_select);

    $object = new stdClass();

    if (!isset($sql_resultSet)) {
        $object->success = false;
        $object->results = "No results";
    } else {
        if (mysqli_num_rows($sql_resultSet) == 0) {
            $object->success = false;
            $object->results = "No results";
        } else {
            $object->success = true;
            $object->results = array();

            $objectInner = new stdClass();

            $pointer = 0;

            while ($row = mysqli_fetch_assoc($sql_resultSet)) {
                $objectInner->name = $row['item_serial_number'] . ": " . $row['item_name'];
                $objectInner->value = $row['item_id'];
                $objectInner->text = $row['item_serial_number'] . ": " . $row['item_name'];
                // array_push($object->results, $objectInner);

                $object->results[$pointer++] = $objectInner;
                $objectInner = new stdClass();
            }

            echo json_encode($object);
        }
    }
} else if (!isset($_POST['item-id'])) {
    echo "No item id";
} else if (!is_numeric($_POST['item-id'])) {
    echo "Invalid item id";
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $itemId = mysqli_real_escape_string($database, $_POST['item-id']);

    $sql_select = "SELECT i.*, CONCAT(u.user_last_name, \", \", u.user_first_name) AS \"user_name\" FROM `items` i

    LEFT JOIN users u ON i.item_owner = u.user_id
    
    WHERE i.item_id = " . $itemId;

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
}
