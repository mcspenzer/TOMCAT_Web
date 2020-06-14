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
                <img class="ui avatar image " src="https://via.placeholder.com/150">
                <span>Username</span> <i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item" href="#">My Profile</a>
                    <a class="item" href="#">Settings</a>
                    <div class="divider"></div>
                    <div class="header">Logout</div>
                    <div class="item">
                        <i class="dropdown icon"></i>
                        Sub Menu
                        <div class="menu">
                            <a class="item" href="#">Link Item</a>
                            <a class="item" href="#">Link Item</a>
                        </div>
                    </div>
                    <a class="item" href="#">Link Item</a>
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
                <a href="#">
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

    <script src='../assets/ext/semantic/semantic.min.js'></script>
</body>

</html>