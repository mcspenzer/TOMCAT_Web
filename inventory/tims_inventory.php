<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Inventory</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
</head>

<body>
    <?php require '../html/tims_header.php'; ?>

    <h2 class="ui header" style="margin-top: 5em;margin-left: 2em">
        <i class="boxes centered icon"></i>
        <div class="content">
            Inventory
        </div>
    </h2>

    <div class="ui middle aligned center aligned" style="margin-top: 2em">
        <div class="ui two column doubling stackable grid container">
            <div class="column">
                <div class="ui vertical menu" style="margin-top: 3em; margin-left:-7em">
                    <a class="item" href="../users/tims_users.php">
                        Go to Users
                        <!-- <div class="ui teal left pointing label">1</div> -->
                    </a>
                    <a class="item" href="../reports/tims_reports.php">
                        Go to Reports
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <div class="item">
                        <div class="ui primary button centered" style="margin-left: 1.5em" onclick="createNewItem()">Add new Item</div>
                    </div>
                </div>
            </div>
            <div class="column">
                <table class="ui very basic collapsing celled table" style="margin-left: -32em">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Item Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Owner</th>
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
                                        TC_ITEM-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                Camera
                            </td>
                            <td>
                                Available
                            </td>
                            <td>
                                John Doe
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
                                        TC_ITEM-002
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 2
                            </td>
                            <td>
                                Camera
                            </td>
                            <td>
                                In User
                            </td>
                            <td>
                                John Doe
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
                                        TC_ITEM-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                Camera
                            </td>
                            <td>
                                Available
                            </td>
                            <td>
                                John Doe
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
                                        TC_ITEM-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                Camera
                            </td>
                            <td>
                                Available
                            </td>
                            <td>
                                John Doe
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="ui modal" id="createNewUser">
        <i class="close icon"></i>
        <div class="header">
            Create new Item
        </div>
        <div class="ui container" style="padding: 1em">
            <form class="ui form">
                <div class="field">
                    <label>Serial Number</label>
                    <input type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="field">
                    <label>Item Name</label>
                    <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="field">
                    <label>Type</label>
                    <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="field">
                    <label>Owner</label>
                    <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <button class="ui button" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script>
        function createNewItem() {
            $('.ui.modal')
                .modal('show');
        }
    </script>
    <script src="../assets/js/header-methods.js"></script>
</body>

</html>