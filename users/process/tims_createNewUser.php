<?php

// Connect to Database

// foreach ($_POST as $key => $value) {
//     echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
// }
// echo "FILES\n\n";

// foreach ($_FILES as $fileKey => $fileValue) {
//     echo "File ".htmlspecialchars($fileKey)." is ".htmlspecialchars($fileValue)."<br>";
// }

$database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

if (!isset($_FILES['display-photo'])) {
    echo "No display photo";
} else {
    if (!isset($_POST['last-name'])) {
        echo "No last name";
    } else {
        if (!isset($_POST['first-name'])) {
            echo "No first name";
        } else {
            if (!isset($_POST['position'])) {
                echo "No position";
            } else {
                if (!isset($_POST['contact-number'])) {
                    echo "No contact number";
                } else {
                    if (!isset($_POST['email'])) {
                        echo "No email";
                    } else {
                        if (!isset($_POST['password'])) {
                            echo "No password";
                        } else {
                            if (!isset($_POST['confirm-password'])) {
                                echo "No confirm password";
                            } else {
                                if (mysqli_real_escape_string($database, $_POST['password']) != mysqli_real_escape_string($database, $_POST['confirm-password'])) {
                                    echo "Password mismatch";
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

function continueCreation() {
    $target_dir = "./displayphotouploads/";
    $target_file = $target_dir . basename($_FILES["display-photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = true;

    // print $target_dir;

    if (!img_checkReal()) {
        echo "Image not real";
    } else {
        if (!img_checkSize()) {
            echo "Image too large";
        } else {
            if (!img_checkExtention($imageFileType)) {
                echo "Image invalid extension";
            } else {
                $actual_file_dir = $target_dir . md5(rand());

                $absolute_file_dir = $actual_file_dir . "/displayPhoto." . $imageFileType;

                if (!is_dir($actual_file_dir . "/displayPhoto") && !mkdir($actual_file_dir . "/displayPhoto", 0777, true)) {
                    echo "Error creating directory";
                } else {
                    if (!move_uploaded_file($_FILES["display-photo"]["tmp_name"], $absolute_file_dir)) {
                        echo "File upload error";
                    } else {
                        // echo "File upload success";
                        createUser($absolute_file_dir);
                    }
                }
            }
        }
    }
}

function createUser($target_file) {
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $firstName = mysqli_real_escape_string($database, $_POST['first-name']);
    $lastName = mysqli_real_escape_string($database, $_POST['last-name']);
    $position = mysqli_real_escape_string($database, $_POST['position']);
    $contactNumber = mysqli_real_escape_string($database, $_POST['contact-number']);
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $password = mysqli_real_escape_string($database, $_POST['password']);
    $password_hashed = md5($password);

    $sql_insert = "INSERT INTO users (user_first_name, user_last_name, user_position, user_contact_number, user_email, user_password, user_display_photo, user_date_created, user_date_modified) VALUES ('$firstName', '$lastName', '$position', '$contactNumber', '$email', '$password_hashed', '$target_file', now(), now())";

    if (mysqli_query($database, $sql_insert)) {
        echo "User creation success";
    } else {
        echo "User creation failed";
    }
}

function img_checkReal() {
    $check = getimagesize($_FILES["display-photo"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        return true;
    } else {
        // echo "File is not an image.";
        return false;
    }
}

function img_checkSize() {
    if ($_FILES["display-photo"]["size"] > 500000) {
        // echo "Sorry, your file is too large.";
        return false;
    }

    return true;
}

function img_checkExtention($imageFileType) {
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return false;
    }

    return true;
}