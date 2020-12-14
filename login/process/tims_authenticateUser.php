<?php

require '../../vendor/autoload.php';

if (!isset($_POST['user-email'])) {
    die('no user email');
} else if (!isset($_POST['user-password'])) {
    die('no user password');
} else {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');
    mysqli_set_charset($database, 'utf8');

    $user_email = mysqli_real_escape_string($database, $_POST['user-email']);
    // $user_password = mysqli_real_escape_string($database, $_POST['user-password']);
    $user_password = $_POST['user-password'];

    // echo "User Password length server init: " . strlen($user_password);

    $sql_select = "SELECT * FROM users WHERE user_email = '$user_email'";

    $sql_resultSet = mysqli_query($database, $sql_select);

    if (!isset($sql_resultSet)) {
        die('Error retrieving user');
    } else {

        $row_total = mysqli_num_rows($sql_resultSet);

        if ($row_total == 0) {
            die('No user exist');
        } else if ($row_total > 1) {
            die('Error retrieving user');
        } else if ($row_total == 1) {

            while ($row = mysqli_fetch_assoc($sql_resultSet)) {
                // echo "\nPassword from UI Hash: " . password_hash($user_password, PASSWORD_DEFAULT) . "\n";
                // echo 'Password from DB Hash: ' . $row['user_password'];

                // var_dump($row['user_password']);

                if (PHPassLib\Hash\BCrypt::verify($user_password, $row['user_password'])) {
                    
                    $jsonArray = array();

                    $jsonArray['user_id'] = $row['user_id'];
                    $jsonArray['user_first_name'] = $row['user_first_name'];
                    $jsonArray['user_last_name'] = $row['user_last_name'];
                    $jsonArray['user_email'] = $row['user_email'];
                    $jsonArray['user_display_photo'] = $row['user_display_photo'];
                    $jsonArray['user_role'] = $row['user_role'];

                    echo json_encode($jsonArray);
                } else {
                    die('Invalid password');
                }
            }
        }
    }
}
