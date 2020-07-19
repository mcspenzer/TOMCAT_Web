<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Home</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
</head>

<body>

    <div class="ui fixed menu">
        <div class="ui container">
            <a href="#" class="header item">
                <img class="logo" src="https://via.placeholder.com/150" style="margin-right:0.5em">
                TIMS | TOMCAT Information Management System
            </a>

            <div class="header item right floated ui simple dropdown item">
                <img class="ui avatar image " src="https://via.placeholder.com/150" id="user-profile-display-photo">
                <span id="user-profile-first-name">Username</span> <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item" href="#">My Profile</a>
                    <a class="item" href="#">Settings</a>
                    <div class="divider"></div>
                    <a class="item" href="#" onclick="logoutUser()"><strong>Logout</strong></a>
                </div>
            </div>
        </div>
    </div>

    <div class="ui middle aligned center aligned" style="margin-top: 10em">
        <div class="ui three column doubling stackable grid container">
            <div class="column">
                <a href="../users/tims_users.php">
                    <div class="ui centered card">
                        <div class="centered image" style="text-align: center">
                            <i class="massive users centered icon" style="display: inline-block;margin-top:0.5em;margin-bottom:0.5em"></i>
                        </div>
                        <div class="content">
                            <span class="header">Users</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="../inventory/tims_inventory.php">
                    <div class="ui centered card">
                        <div class="centered image" style="text-align: center">
                            <i class="massive boxes centered icon" style="display: inline-block;margin-top:0.5em;margin-bottom:0.5em"></i>
                        </div>
                        <div class="content">
                            <span class="header">Inventory</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="../reports/tims_reports.php">
                    <div class="ui centered card">
                        <div class="centered image" style="text-align: center">
                            <i class="massive clipboard list centered icon" style="display: inline-block;margin-top:0.5em;margin-bottom:0.5em"></i>
                        </div>
                        <div class="content">
                            <span class="header">Reports</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
	<script src='../assets/ext/semantic/semantic.min.js'></script>
	<script src="../assets/js/jquery.validate.min.js"></script>
	<script src="../assets/js/additional-methods.min.js"></script>
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    
    <script>
        var firstName = sessionStorage.getItem('user_first_name');
        var lastName = sessionStorage.getItem('user_last_name');
        var email = sessionStorage.getItem('user_email');
        var displayPhoto = sessionStorage.getItem('user_display_photo');
        var displayPhotoParsed = displayPhoto.substring(2);

        if (!firstName && !lastName && !email & !displayPhoto) {
            console.log('- Session not initiated');
        } else {
            $('#user-profile-first-name').html(firstName + ' ' + lastName);
            $('#user-profile-display-photo').attr('src', '../users/process/' + displayPhotoParsed);
        }

        function logoutUser() {
            sessionStorage.clear();
            window.location.replace("../login/tims_login.php");
        }

    </script>


</body>

</html>