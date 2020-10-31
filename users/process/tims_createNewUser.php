<?php

// Connect to Database

// foreach ($_POST as $key => $value) {
//     echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
// }
// echo "FILES\n\n";

// foreach ($_FILES as $fileKey => $fileValue) {
//     echo "File ".htmlspecialchars($fileKey)." is ".htmlspecialchars($fileValue)."<br>";
// }

// echo $_SERVER["CONTENT_TYPE"] . "\n\n";

require '../../vendor/autoload.php';

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');
mysqli_set_charset($database, 'utf8');

if (!isset($_FILES['display-photo'])) {
    echo "No display photo";
    $_POST = array();
} else {
    if (!isset($_POST['last-name'])) {
        echo "No last name";
        $_POST = array();
    } else {
        if (!isset($_POST['first-name'])) {
            echo "No first name";
            $_POST = array();
        } else {
            if (!isset($_POST['position'])) {
                echo "No position";
                $_POST = array();
            } else {
                if (!isset($_POST['contact-number'])) {
                    echo "No contact number";
                    $_POST = array();
                } else {
                    if (!isset($_POST['email'])) {
                        echo "No email";
                        $_POST = array();
                    } else {
                        if (!isset($_POST['password'])) {
                            echo "No password";
                            $_POST = array();
                        } else {
                            if (!isset($_POST['confirm-password'])) {
                                echo "No confirm password";
                                $_POST = array();
                            } else {
                                if (mysqli_real_escape_string($database, $_POST['password']) != mysqli_real_escape_string($database, $_POST['confirm-password'])) {
                                    echo "Password mismatch";
                                    $_POST = array();
                                } else {
                                    continueCreation();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

function emailExists()
{
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $email = $_POST['email'];

    $sql_select = "SELECT * FROM users WHERE user_email = ?";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_select)) {
        die('Prepare failed');
    } else {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        mysqli_close($database);

        if (empty(mysqli_fetch_assoc($result))) {
            return false;
        }
    }

    return true;
}

function continueCreation()
{
    $target_dir = "./displayphotouploads/";
    $target_file = $target_dir . basename($_FILES["display-photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = true;



    // print $target_dir;
    if (emailExists()) {
        echo 'Email exists';
        $_POST = array();
    } else if (!img_checkReal()) {
        echo "Image not real";
        $_POST = array();
    } else {
        if (!img_checkSize()) {
            echo "Image too large";
            $_POST = array();
        } else {
            if (!img_checkExtention($imageFileType)) {
                echo "Image invalid extension";
                $_POST = array();
            } else {
                $actual_file_dir = $target_dir . md5(rand());

                $absolute_file_dir = $actual_file_dir . "/displayPhoto." . $imageFileType;

                if (!is_dir($actual_file_dir . "/displayPhoto") && !mkdir($actual_file_dir . "/displayPhoto", 0777, true)) {
                    echo "Error creating directory";
                    $_POST = array();
                } else {
                    if (!move_uploaded_file($_FILES["display-photo"]["tmp_name"], $absolute_file_dir)) {
                        echo "File upload error";
                        $_POST = array();
                    } else {
                        // echo "File upload success";
                        createUser($absolute_file_dir);
                    }
                }
            }
        }
    }
}

function createUser($target_file)
{
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');
    mysqli_set_charset($database, 'utf8');

    // $firstName = mysqli_real_escape_string($database, $_POST['first-name']);
    // $lastName = mysqli_real_escape_string($database, $_POST['last-name']);
    // $position = mysqli_real_escape_string($database, $_POST['position']);
    // $contactNumber = mysqli_real_escape_string($database, $_POST['contact-number']);
    // $email = mysqli_real_escape_string($database, $_POST['email']);
    // $password = mysqli_real_escape_string($database, $_POST['password']);
    // $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $position = $_POST['position'];
    $contactNumber = $_POST['contact-number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // var_dump($password);
    // $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Calculate a bcrypt hash from a password
    $hash = trim(PHPassLib\Hash\BCrypt::hash($password, array ('rounds' => 16)));

    // var_dump(mb_check_encoding($hash, 'UTF-8'));

    // echo "User Password length server: " . strlen($password);
    // $password_hashed = md5($password);

    // TODO: Check if email exists

    // echo "Password: " . $password . "\n";

    // $sql_insert = "INSERT INTO users (user_first_name, user_last_name, user_position, user_contact_number, user_email, user_password, user_display_photo, user_date_created, user_date_modified) VALUES ('$firstName', '$lastName', '$position', '$contactNumber', '$email', '$password_hashed', '$target_file', now(), now())";

    $sql_insert = "INSERT INTO users (
        user_first_name, 
        user_last_name, 
        user_position, 
        user_contact_number, 
        user_email, 
        user_password, 
        user_display_photo, 
        user_date_created, 
        user_date_modified
    ) VALUES (?,?,?,?,?,?,?,now(),now())";

    $stmt = mysqli_stmt_init($database);

    if (!mysqli_stmt_prepare($stmt, $sql_insert)) {
        die(mysqli_error($database));
        $_POST = array();
    } else {
        mysqli_stmt_bind_param($stmt, "sssssss", $firstName, $lastName, $position, $contactNumber, $email, $hash, $target_file);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "User creation success";
    } else {
        echo "User creation failed";
    }

    $_POST = array();
}

function img_checkReal()
{
    $check = getimagesize($_FILES["display-photo"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        return true;
    } else {
        // echo "File is not an image.";
        return false;
    }
}

function img_checkSize()
{
    if ($_FILES["display-photo"]["size"] > 500000) {
        // echo "Sorry, your file is too large.";
        return false;
    }

    return true;
}

function img_checkExtention($imageFileType)
{
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return false;
    }

    return true;
}
