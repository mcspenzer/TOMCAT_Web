<?php

if (isset($_GET['query'])) {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');
    // echo '{"success": true,"results": [
    //     {
    //         "name" : "Casuga, McSpenzer",
    //         "value" : "Casuga, McSpenzer",
    //         "text"  : "Casuga, McSpenzer"
    //     },{
    //         "name"  : "Dela Chica, June",
    //         "value" : "Dela Chica, June",
    //         "text"  : "Dela Chica, June"
    //     },{
    //         "name"  : "De Guzman, Clarisse",
    //         "value" : "De Guzman, Clarisse",
    //         "text"  : "De Guzman, Clarisse"
    //     },{
    //         "name"  : "Ruz, Trisha",
    //         "value" : "Ruz, Trisha",
    //         "text"  : "Ruz, Trisha"
    //     },{
    //         "name"  : "Cheng, Paula",
    //         "value" : "Cheng, Paula",
    //         "text"  : "Cheng, Paula"
    //     }
    // ]}';

    $sql_select = "SELECT * FROM users WHERE user_id != -1";

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
                $objectInner->name = $row['user_last_name'] . ", " . $row['user_first_name'];
                $objectInner->value = $row['user_id'];
                $objectInner->text = $row['user_last_name'] . ", " . $row['user_first_name'];
                // array_push($object->results, $objectInner);
            
                $object->results[$pointer++] = $objectInner;
                $objectInner = new stdClass();
            }

            echo json_encode($object);
        }
    }

} else if (!isset($_POST['user-id'])) {
    echo "No user id";
} else if (!is_numeric($_POST['user-id'])) {
    echo "Invalid user id";
} else {

    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $userId = mysqli_real_escape_string($database, $_POST['user-id']);

    $sql_select = "SELECT * FROM users WHERE user_id = " . $userId;

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
}
