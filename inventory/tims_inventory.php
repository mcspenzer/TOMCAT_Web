<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Inventory</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/ext/fomatic/semantic.min.css">
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
                        <div class="ui secondary button centered" style="margin-left: 1.5em" onclick="createNewItem()"><i class="dolly icon"></i>Borrow Item&nbsp;&nbsp;&nbsp;</div>
                        <div class="ui button centered" style="margin-left: 1.5em;margin-top: 1em" onclick="createNewItem()"><i class="warehouse icon"></i>Return Item&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="item">
                        <div class="ui primary button centered green" style="margin-left: 1.5em" onclick="createNewItem()"><i class="box icon"></i>Add new Item</div>
                    </div>
                </div>
            </div>
            <div class="column">
                <table class="ui very basic collapsing celled table" style="margin-left: -32em">
                    <thead>
                        <tr>
                            <th>Item ID</th>
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
                    <tbody id="items-table-body">
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
        </div>
    </div>

    <div class="ui modal" id="createNewUser">
        <i class="close icon"></i>
        <div class="header">
            Create new Item
        </div>
        <div class="ui container" style="padding: 1em">
            <form class="ui form" id="add-item-form">
                <div class="field required">
                    <label>Serial Number</label>
                    <div class="ui left corner labeled input">
                        <input required type="text" name="serial-number" placeholder="Serial Number" id="serial-number">
                        <div class="ui left corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="field required">
                    <label>Item Name</label>
                    <div class="ui left corner labeled input">
                        <input required type="text" name="item-name" placeholder="Item Name" id="item-name">
                        <div class="ui left corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="field required">
                    <label>Item Type</label>
                    <div class="ui left corner labeled input">
                        <input required type="text" name="item-type" placeholder="Item Type" id="item-type">
                        <div class="ui left corner label">
                            <i class="asterisk icon"></i>
                        </div>
                    </div>
                </div>
                <div class="field required">
                    <label>Item Owner</label>
                    <select class="ui search selection dropdown" id="item-owner-select">
                        <option value="" disabled selected>Lastname, Firstname</option>
                    </select>
                </div>
                <button class="ui button" type="submit" onclick="submitNewItemForm()" id="new-item-submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/additional-methods.min.js"></script>
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    <script src="../assets/js/header-methods.js"></script>

    <script>
        function createNewItem() {
            $('.ui.modal')
                .modal('show');
        }

        function getAllItems() {
            var xhttp = new XMLHttpRequest();

            xhttp.onload = (e) => {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        console.log(xhttp.responseText);

                        var results = JSON.parse(xhttp.responseText);

                        console.log(results);

                        // $("#users-table").html("");

                        var appendStr = "";

                        for (var i = 0; i < results.length; i++) {
                            appendStr += '<tr><td><strong>TC_ITEM-' + results[i].item_id + '</strong></td><td>' + results[i].item_serial_number + '</td><td>' + results[i].item_name + '</td><td>' + results[i].item_type + '</td><td>' + results[i].item_status + '</td><td>' + results[i].item_owner + '</td><td>' + results[i].item_date_created + '</td><td>' + results[i].item_date_modified + '</td><td><span><i class="pencil alternate centered icon" style="cursor: pointer;" onclick="editUser(' + results[i].item_id + ')"></i>| <i class="trash alternate centered icon" style="cursor: pointer;" onclick="deleteUser(' + results[i].item_id + ')"></i></span></td></tr>'
                        }

                        // new Date(results[i].user_date_created).toUTCString();
                        $("#items-table-body").html(appendStr)
                    }
                }
            };

            xhttp.onerror = function(e) {
                console.error(xhr.statusText);
            };

            xhttp.open('POST', './process/tims_displayAllItems.php', true);

            xhttp.send();
        }

        function submitNewItemForm() {
            console.log('Submit Item');

            $('#add-item-form').form({
                fields: {
                    serial_number: {
                        identifier: 'serial-number',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please specify the item\'s serial number'
                        }]
                    },
                    item_name: {
                        identifier: 'item-name',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please specify the item\'s name'
                        }]
                    },
                    item_type: {
                        identifier: 'item-type',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please specify the item\'s type (e.g. Camera)'
                        }]
                    },
                    item_owner: {
                        identifier: 'item-owner-select',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please specify the item\'s owner'
                        }]
                    }
                }
            });

            var isFormValid = $('#add-item-form').form('is valid');

            if (isFormValid) {
                $('#new-item-submit').addClass('loading');
                $('#new-item-submit').addClass('disabled');

                var xhttp = new XMLHttpRequest();

                xhttp.onload = (e) => {
                    if (xhttp.readyState === 4) {
                        if (xhttp.status === 200) {
                            console.log(xhttp.responseText)

                            var toastObj = {
                                class: 'error',
                                title: 'Error',
                                position: 'bottom right',
                                showIcon: 'exclamation',
                                showProgress: 'bottom'
                            }

                            toastObj.message = xhttp.responseText;

                            if (xhttp.responseText == 'Item creation success') {
                                toastObj.class = 'success';
                                toastObj.title = 'Success';
                            }

                            $('#new-item-submit').removeClass('loading');
                            $('#new-item-submit').removeClass('disabled');

                            $('#createNewUser').modal('hide');
                            $('body').toast(toastObj);
                            getAllItems();
                        } else {
                            console.log(xhttp.statusText)
                        }
                    }
                };

                xhttp.onerror = function(e) {
                    console.error(xhr.statusText);
                };

                xhttp.open('POST', './process/tims_createNewItem.php', true);

                var data = new FormData();

                data.append('serial-number', $('#serial-number').val());
                data.append('item-name', $('#item-name').val());
                data.append('item-type', $('#item-type').val());
                data.append('item-owner', $('#item-owner-select').dropdown('get value'));

                // xhttp.setRequestHeader('Content-type', 'multipart/form-data; boundary="---------------------------168261202239157867303724621122"');

                xhttp.send(data);
            }
        }
    </script>
    <script src="../assets/js/header-methods.js"></script>
    <script>
        $(document).ready(function() {
            $('#item-owner-select')
                .dropdown({
                    apiSettings: {
                        url: 'http://localhost/tomcat_web/users/process/tims_fetchUser.php?query=query',
                        onResponse: function(response) {
                            console.log('Dropdown response: ', response);
                        },
                        cache: false
                    },
                    filterRemoteData: true,
                    saveRemoteData: false
                });

            $("#add-item-form").submit(function(e) {
                e.preventDefault();
            });

            getAllItems();
        });
    </script>
</body>

</html>