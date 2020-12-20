<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Reports - Borrower</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/ext/fomatic/semantic.min.css">
</head>

<body style="background-image: linear-gradient(to bottom, white, rgba(255,255,204,1))">
    <?php require '../html/tims_header.php'; ?>

    <h2 class="ui header" style="margin-top: 5em;margin-left: 2em">
        <i class="boxes centered icon"></i>
        <div class="content">
            Reports | Borrower
        </div>
    </h2>

    <div class="ui middle aligned center aligned" style="margin-top: 2em">
        <div class="ui grid equal width" style="margin-left: 10em; margin-right: 10em">
            <div class="three wide column">
                <div class="ui vertical menu" style="margin-top: 3em; margin-left:-7em">
                    <a class="item" href="../users/tims_users.php">
                        Go to Users
                        <!-- <div class="ui teal left pointing label">1</div> -->
                    </a>
                    <a class="item" href="../inventory/tims_inventory.php">
                        Go to Inventory
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <a class="item" href="../reports/tims_reports_returner.php">
                        Go to Returner reports
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <div class="item" id="export-btn">
                        <div class="ui primary button centered" style="margin-left: 1.5em" onclick="window.open('http\:\/\/localhost/tomcat_web/reports/process/tims_exportToPDF.php?borrow=T','_blank');"><i class="file pdf icon"></i>Export to PDF</div>
                    </div>
                    <div class="item">
                        <div class="ui slider checkbox" id='calendar-slider'>
                            <input type="checkbox" name="throughput" checked="checked">
                            <label>Show Calendar</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eight wide column">
                <table class="ui very basic selectable celled table">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>Item Name</th>
                            <th>User</th>
                            <th>External Borrower</th>
                            <th>Date Borrowed</th>
                        </tr>
                    </thead>
                    <tbody id="borrows-table-body">
                        <tr>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="ui fluid placeholder">
                                    <div class="paragraph">
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="three wide column" style="pointer-events: none;" id="calendar-af">
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
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    <script src="../assets/js/header-methods.js"></script>
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
    <script>
        $(document).ready(function() {

            var role = sessionStorage.getItem('user_role');

            if (role == 2) {
                $('#export-btn').hide();
            }

            getAllBorrowReports();

            $('#calendar-slider').checkbox({
                onChecked: function() {
                    $('#calendar-af').show()
                },
                onUnchecked: function() {
                    $('#calendar-af').hide()
                },
            })
        });
    </script>
    <script>
        function getAllBorrowReports() {
            var xhttp = new XMLHttpRequest();

            xhttp.onload = (e) => {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {

                        console.log(xhttp.responseText);
                        var results = JSON.parse(xhttp.responseText);

                        var appendStr = "";

                        for (var i = 0; i < results.length; i++) {
                            appendStr += '<tr onclick=selectLog(this)><td><strong>TC_BOR-' + results[i].borrow_log_id + '</strong></td><td>' + results[i].item_name + '</td><td>' + results[i].item_borrower + '</td><td>' + results[i].borrow_log_item_borrower_external + '</td><td class="logdate">' + results[i].borrow_log_date_created + '</td></tr>'
                        }

                        // new Date(results[i].user_date_created).toUTCString();
                        $("#borrows-table-body").html(appendStr)
                    }
                }
            };

            xhttp.onerror = function(e) {
                console.error(xhr.statusText);
            };

            xhttp.open('POST', './process/tims_displayAllBorrows.php', true);

            xhttp.send();
        }

        function selectLog(element) {
            $('#borrows-table-body').children('tr').removeClass('active');
            $(element).addClass('active');

            var date = $(element).children('.logdate').html().split(" ")[0];

            $('.ui.calendar').calendar('set date', date);
        }
    </script>
</body>

</html>