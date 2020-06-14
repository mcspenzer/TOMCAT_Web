<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Users</title>
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
                    <div class="item">Logout</div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="ui header" style="margin-top: 5em;margin-left: 2em">
        <i class="users centered icon"></i>
        <div class="content">
            Users
        </div>
    </h2>

    <div class="ui middle aligned center aligned" style="margin-top: 2em">
        <div class="ui two column doubling stackable grid container">
            <div class="column">
                <div class="ui vertical menu" style="margin-top: 3em; margin-left:-7em">
                    <a class="active teal item">
                        Go to Inventory
                        <!-- <div class="ui teal left pointing label">1</div> -->
                    </a>
                    <a class="item">
                        Go to Reports
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <div class="item">
                        <div class="ui primary button centered" style="margin-left: 1.5em" onclick="createNewUser()">Add new User</div>
                    </div>
                </div>
            </div>
            <div class="column">
                <table class="ui very basic collapsing celled table" style="margin-left: -32em">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Position</th>
                            <th>Contact Number</th>
                            <th>E-mail</th>
                            <th>Date created</th>
                            <th>Date modified</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TOMCAT-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Doe
                            </td>
                            <td>
                                John
                            </td>
                            <td>
                                Executive Board
                            </td>
                            <td>
                                +63 917 999 9999
                            </td>
                            <td>
                                jdoe@example.com
                            </td>
                            <td>
                                05/16/2020
                            </td>
                            <td>
                                05/16/2020
                            </td>
                            <td>
                                <span><i class="pencil alternate centered icon"></i>| <i class="trash alternate centered icon"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TOMCAT-002
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Doe
                            </td>
                            <td>
                                Jane
                            </td>
                            <td>
                                Executive Board
                            </td>
                            <td>
                                +63 917 111 9999
                            </td>
                            <td>
                                janedoe@example.com
                            </td>
                            <td>
                                05/16/2020
                            </td>
                            <td>
                                05/16/2020
                            </td>
                            <td>
                                <span><i class="pencil alternate centered icon"></i>| <i class="trash alternate centered icon"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TOMCAT-003
                                    </div>
                                </h4>
                            </td>
                            <td>
                                12
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TOMCAT-004
                                    </div>
                                </h4>
                            </td>
                            <td>
                                11
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="ui modal" id="createNewUser">
        <i class="close icon"></i>
        <div class="header">
            Create new user
        </div>
        <div class="ui container" style="padding: 1em">
        <form class="ui form">
            <div class="field">
                <label>Last Name</label>
                <input type="text" name="first-name" placeholder="First Name">
            </div>
            <div class="field">
                <label>First Name</label>
                <input type="text" name="last-name" placeholder="Last Name">
            </div>
            <div class="field">
                <label>Position</label>
                <input type="text" name="last-name" placeholder="Last Name">
            </div>
            <div class="field">
                <label>Contact Number</label>
                <input type="text" name="last-name" placeholder="Last Name">
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" name="last-name" placeholder="Last Name">
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script>
        function createNewUser() {
            $('.ui.modal')
                .modal('show');
        }
    </script>
</body>

</html>