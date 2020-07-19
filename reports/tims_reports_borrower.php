<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Reports - Borrower</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/ext/fomatic/semantic.min.css">
</head>

<body>
    <?php require '../html/tims_header.php'; ?>

    <h2 class="ui header" style="margin-top: 5em;margin-left: 2em">
        <i class="boxes centered icon"></i>
        <div class="content">
            Reports | Borrower
        </div>
    </h2>

    <div class="ui middle aligned center aligned" style="margin-top: 2em">
        <div class="ui three column doubling stackable grid container">
            <div class="column">
                <div class="ui vertical menu" style="margin-top: 3em; margin-left:-7em">
                    <a class="item" href="../users/tims_users.php">
                        Go to Users
                        <!-- <div class="ui teal left pointing label">1</div> -->
                    </a>
                    <a class="item" href="../inventory/tims_inventory.php">
                        Go to Inventory
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <div class="item">
                        <div class="ui primary button centered" style="margin-left: 1.5em" onclick="createNewItem()"><i class="file pdf icon"></i>Export to PDF</div>
                    </div>
                </div>
            </div>
            <div class="column" style="margin-left:20em">
                <table class="ui very basic collapsing celled table" style="margin-left: -32em">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>Item Name</th>
                            <th>User</th>
                            <th>Date Borrowed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TC_BOR-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                John DOe
                            </td>
                            <td>
                                05/16/2020
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TC_BOR-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                John DOe
                            </td>
                            <td>
                                05/16/2020
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TC_BOR-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                John DOe
                            </td>
                            <td>
                                05/16/2020
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        TC_BOR-001
                                    </div>
                                </h4>
                            </td>
                            <td>
                                Camera 1
                            </td>
                            <td>
                                John DOe
                            </td>
                            <td>
                                05/16/2020
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="column" style="margin-left:-20em; pointer-events: none;">
                <div class="ui calendar" id="inline_calendar">
                </div>
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
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    <script>
        function createNewItem() {
            $('.ui.modal')
                .modal('show');
        }
    </script>
    <script>
        $('#inline_calendar')
            .calendar();

        // $('.ui.calendar').calendar('set date', '1998-11-16');
    </script>
    <script src="../assets/js/header-methods.js"></script>
</body>

</html>