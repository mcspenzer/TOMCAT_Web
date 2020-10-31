<?php

if (!isset($_POST['user-id'])) {
    die("No user id");
    $_POST = array();
} else {
    if (!isset($_FILES['edit-display-photo'])) {
        updateUser();
    } else {
        $target_dir = "./displayphotouploads/";
        $target_file = $target_dir . basename($_FILES["edit-display-photo"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = true;

        // print $target_dir;

        if (!img_checkReal()) {
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
                            updateUser($absolute_file_dir);
                        }
                    }
                }
            }
        }
    }
}

function updateUser($displayPhoto = null)
{
    $database = mysqli_connect('localhost', 'root', '', 'tomcat_web');

    $sql_update = "UPDATE users SET ";

    if (isset($displayPhoto) && $displayPhoto != null) {
        $sql_update .= "user_display_photo = '" . $displayPhoto . "', ";
    }

    if (isset($_POST['last-name'])) {
        $sql_update .= "user_last_name = '" . mysqli_real_escape_string($database, $_POST['last-name']) . "', ";
    }

    if (isset($_POST['first-name'])) {
        $sql_update .= "user_first_name = '" . mysqli_real_escape_string($database, $_POST['first-name']) . "', ";
    }

    if (isset($_POST['position'])) {
        $sql_update .= "user_position = '" . mysqli_real_escape_string($database, $_POST['position']) . "', ";
    }

    if (isset($_POST['contact-number'])) {
        $sql_update .= "user_contact_number = '" . mysqli_real_escape_string($database, $_POST['contact-number']) . "', ";
    }

    if (isset($_POST['email'])) {
        $sql_update .= "user_email = '" . mysqli_real_escape_string($database, $_POST['email']) . "', ";
    }

    if (isset($_POST['password']) && isset($_POST['confirm-password'])) {
        if ($_POST['password'] != $_POST['confirm-password']) {
            die("Password does not match");
            $_POST = array();
        } else {

            $password_hashed = md5(mysqli_real_escape_string($database, $_POST['password']));

            $sql_update .= "user_password = '" . $password_hashed . "', ";
        }
    }

    $sql_update .= "user_date_modified = now() WHERE user_id = " . mysqli_real_escape_string($database, $_POST['user-id']) . "";

    if (mysqli_query($database, $sql_update)) {
        echo "User update success";
    } else {
        echo "User update failed: " . mysqli_error($database);
        echo "SQL: " . $sql_update;
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
