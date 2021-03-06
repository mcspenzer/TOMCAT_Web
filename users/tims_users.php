<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Users</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/ext/fomatic/semantic.min.css">
</head>

<body style="background-image: linear-gradient(to bottom, white, rgba(255,255,204,1))"> 
    <?php require '../html/tims_header.php'; ?>

    <h2 class="ui header" style="margin-top: 5em;margin-left: 2em">
        <i class="users centered icon"></i>
        <div class="content">
            Users
        </div>
    </h2>

    <div class="ui middle aligned center aligned" style="margin-top: 2em">
        <div class="ui grid" style="margin-left: 10em; margin-right: 10em">
            <div class="left floated two wide column">
                <div class="ui vertical menu" style="margin-top: 3em; margin-left:-7em">
                    <a class="item" href="../inventory/tims_inventory.php">
                        Go to Inventory
                        <!-- <div class="ui teal left pointing label">1</div> -->
                    </a>
                    <a class="item" href="../reports/tims_reports.php">
                        Go to Reports
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <div class="item" id="add-new-user-btn">
                        <div class="ui primary button centered" style="margin-left: 1.5em" onclick="createNewUser()"><i class="user plus icon"></i>Add new User</div>
                    </div>
                </div>
            </div>
            <div class="thirteen wide column dimmable">
                <!-- <div class="ui active inverted dimmer">
                    <div class="ui medium text loader">Loading</div>
                </div> -->
                <table class="ui very basic compact sortable collapsing celled table" style="font-size:small" id="users-table">
                    <thead>
                        <tr>
                            <th class="sorted ascending">User ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Position</th>
                            <th>Contact Number</th>
                            <th>E-mail</th>
                            <th>Role</th>
                            <th>Date created</th>
                            <th>Date modified</th>
                            <th id="actions-column">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="users-table-body">
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

    <div class="ui longer modal" id="createNewUser">
        <i class="close icon"></i>
        <div class="header">
            Create new user
        </div>
        <div class="scrolling content">
            <div class="ui container" style="padding: 1em">
                <form class="ui form" id="add-new-user" action="" method="POST" accept-charset="UTF-8">
                    <div class="ui two aligned center aligned" style="margin-top: 2em">
                        <div class="ui two column doubling stackable grid container">
                            <div class="column">
                                <div class="field">
                                    <div class="ui card">
                                        <a class="image" onclick="$('#create-display-photo').click()">
                                            <img src="https://via.placeholder.com/150" id="create-display-photo-preview" class="ui medium image">
                                        </a>
                                        <!-- <div class="ui primary button">
                                        Upload Display Photo
                                    </div> -->

                                        <input required type="file" name="create-display-photo" id="create-display-photo" style="width: 0.1px; height: 0.1px;opacity: 0;overflow: hidden;position: absolute;z-index: -1;" onchange="changeDisplayPhotoPreview(this, 'create')">
                                        <label for="create-display-photo" class="ui primary button centered">
                                            <i class="ui upload icon"></i>
                                            Upload Display Photo
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="column">
                                <div class="field required">
                                    <label>Last Name</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="text" name="create-last-name" placeholder="Last Name" id="create-last-name">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>First Name</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="text" name="create-first-name" placeholder="First Name" id="create-first-name">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>Position</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="text" name="create-position" placeholder="Position" id="create-position">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>Contact Number</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="text" name="create-contact-number" placeholder="Contact Number" id="create-contact-number">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>Email</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="text" name="create-email" placeholder="Email" id="create-email">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>Role</label>
                                    <div class="ui fluid selection dropdown" id="create-role">
                                        <i class="dropdown icon"></i>
                                        <span class="default text">Select Role</span>
                                        <div class="menu">
                                            <div class="item" data-value="1">
                                                <i class="id badge left floated icon"></i>
                                                Administrator
                                            </div>
                                            <div class="item" data-value="2">
                                                <i class="eye left floated icon"></i>
                                                Viewer
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>Password</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="password" name="create-password" placeholder="Password" id="create-password">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field required">
                                    <label>Confirm Password</label>
                                    <div class="ui left corner labeled input">
                                        <input required type="password" name="create-confirm-password" placeholder="Confirm Password" id="create-confirm-password">
                                        <div class="ui left corner label">
                                            <i class="asterisk icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button name="new-user-submit" class="ui primary button" id="new-user-submit" type="submit" style="margin-left: 1em; margin-top: 1em" onclick="submitNewUserForm()">Submit</button>
                    <div class="ui error message">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="ui longer modal" id="editUser">
        <i class="close icon"></i>
        <div class="header">
            Edit user
        </div>
        <div class="scrolling content">
            <div class="ui container" style="padding: 1em">
                <form class="ui form" id="edit-user" action="" method="POST" accept-charset="UTF-8">
                    <div class="ui two aligned center aligned" style="margin-top: 2em">
                        <div class="ui two column doubling stackable grid container">
                            <div class="column">
                                <div class="field">
                                    <div class="ui card">
                                        <a class="image" onclick="$('#edit-display-photo').click()">
                                            <div id="placeholder-id">
                                                <div class="ui placeholder">
                                                    <div class="square image"></div>
                                                </div>
                                            </div>
                                            <!-- <img src="https://via.placeholder.com/150" id="display-photo-preview" class="ui medium image"> -->
                                        </a>
                                        <!-- <div class="ui primary button">
                                        Upload Display Photo
                                    </div> -->
                                        <input type="hidden" id="user-id-hidden" name="user-id" value="">
                                        <input type="file" name="edit-display-photo" id="edit-display-photo" style="width: 0.1px; height: 0.1px;opacity: 0;overflow: hidden;position: absolute;z-index: -1;" onchange="changeDisplayPhotoPreview(this, 'edit')">
                                        <label for="edit-display-photo" class="ui primary button centered">
                                            <i class="ui upload icon"></i>
                                            Upload Display Photo
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="column">
                                <div class="field" id="edit-last-name-div">
                                    <label>Last Name</label>
                                    <div class="ui placeholder">
                                        <div class="medium line"></div>
                                    </div>
                                </div>
                                <div class="field" id="edit-first-name-div">
                                    <label>First Name</label>
                                    <div class="ui placeholder">
                                        <div class="long line"></div>
                                    </div>
                                </div>
                                <div class="field" id="edit-position-div">
                                    <label>Position</label>
                                    <div class="ui placeholder">
                                        <div class="short line"></div>
                                    </div>
                                </div>
                                <div class="field" id="edit-contact-number-div">
                                    <label>Contact Number</label>
                                    <div class="ui placeholder">
                                        <div class="medium line"></div>
                                    </div>
                                </div>
                                <div class="field" id="edit-email-div">
                                    <label>Email</label>
                                    <div class="ui placeholder">
                                        <div class="long line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button name="edit-user-submit" class="ui primary disabled button" id="edit-user-submit" type="submit" style="margin-left: 1em; margin-top: 1em" onclick="submitEditUserForm()">Submit</button>
                    <button name="edit-password-submit" class="ui basic disabled button" id="edit-password-submit" type="submit" style="margin-left: 1em; margin-top: 1em" onclick="editPassword()">Change Password</button>
                    <div class="ui error message">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="ui longer modal" id="edit-password-modal">
        <i class="close icon"></i>
        <div class="header">
            Change Password
        </div>
        <div class="scrolling content">
            <form class="ui form" id="edit-password-form" action="" method="POST" accept-charset="UTF-8">
                <div class="ui container" style="padding: 1em">
                    <div class="field" id="edit-password-div">
                        <label>Change Password</label>
                        <div class="ui left corner labeled input">
                            <input type="password" name="edit-password" placeholder="Password" id="edit-password">
                        </div>
                    </div>
                    <div class="field" id="edit-confirm-password-div">
                        <label>Confirm Password</label>
                        <div class="ui left corner labeled input">
                            <input type="password" name="edit-confirm-password" placeholder="Confirm Password" id="edit-confirm-password">
                        </div>
                    </div>
                    <div class="ui error message">
                    </div>
                </div>
            </form>
        </div>
        <div class="actions">
            <div class="ui red cancel button" id="password-change-cancel">Cancel</div>
            <div class="ui green approve button" id="password-change-proceed">Change Password</div>
        </div>
    </div>

    <div class="ui basic modal" id="delete-user-modal">
        <div class="ui icon header">
            <i class="archive icon"></i>
            <h1>Archive User?</h1>
        </div>
        <div class="content" id="delete-content">
            <p>Do you want to Archive the following user?: </p>
        </div>
        <div class="actions">
            <div class="ui basic cancel inverted button" id="cancel-delete">
                <i class="remove icon"></i>
                Cancel
            </div>
            <div class="ui red ok inverted button" id="proceed-delete">
                <i class="checkmark icon"></i>
                Archive
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/additional-methods.min.js"></script>
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    <script src="../assets/js/header-methods.js"></script>
    <script src='../assets/ext/semantic/tablesort.js'></script>

    <script>
        function createNewUser() {
            $('#new-user-submit').html('Submit')
            $('#display-photo-preview').attr('src', 'https://via.placeholder.com/150')
            $('#createNewUser').modal({
                onHide: function() {
                    console.log('modal hide');
                    // $('#add-new-user').form('reset');
                    // $('#add-new-user').form('clear');
                    $("#add-new-user")[0].reset();
                },
                onShow: function() {
                    console.log('modal show');
                }
            }).modal('show');
        }

        function deleteUser(userId) {
            $("#delete-user-modal").modal({
                onApprove: function() {
                    console.log('Delete user: ' + userId);
                    submitDeleteUserForm(userId);
                }

            }).modal('show');

            var xhttp = new XMLHttpRequest();

            xhttp.onload = (e) => {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        console.log(xhttp.responseText);

                        var result = JSON.parse(xhttp.responseText);

                        $("#delete-content").html('<h3>Do you want to archive <strong>' + result[0].user_first_name + ' ' + result[0].user_last_name + '</strong>?</h3>');

                        // $("#display-photo-edit").val(result[0].user_display_photo);

                    }
                }
            }

            xhttp.onerror = function(e) {
                console.error(xhr.statusText);
            };

            xhttp.open('POST', './process/tims_fetchUser.php', true);

            var data = new FormData();

            data.append('user-id', userId);

            xhttp.send(data);
        }

        function submitDeleteUserForm(userId) {
            $('#proceed-delete').addClass('loading');
            $('#cancel-delete').addClass('disabled');

            var xhttp = new XMLHttpRequest();

            xhttp.onload = (e) => {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        console.log(xhttp.responseText);

                        var toastObj = {
                            class: 'error',
                            title: 'Error',
                            position: 'bottom right',
                            showIcon: 'exclamation',
                            showProgress: 'bottom'
                        }

                        toastObj.message = xhttp.responseText;

                        if (xhttp.responseText == 'User archiving success') {
                            toastObj.class = 'success';
                            toastObj.title = 'Success';
                        }

                        $('#proceed-delete').removeClass('loading');
                        $('#cancel-delete').removeClass('disabled');

                        $('#delete-user-modal').modal('hide');
                        $('body').toast(toastObj);
                        getAllUsers();
                    }
                }
            }

            xhttp.onerror = function(e) {
                console.error(xhr.statusText);
            };

            xhttp.open('POST', './process/tims_deleteUser.php', true);

            var data = new FormData();

            data.append('user-id', userId);

            xhttp.send(data);
        }

        function editPassword() {
            $("#edit-password-modal").modal({
                onApprove: function() {
                    console.log('On Approve');
                    $('#editUser').modal('hide')
                    submitEditUserPassword();
                    return false;
                }
            }).modal('show');
        }

        function submitEditUserPassword() {
            $("#edit-password-form").form({
                fields: {
                    password: {
                        identifier: 'edit-password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter a password'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Password minimum length must be at least 10 characters'
                            }
                        ]
                    },
                    confirm_password: {
                        identifier: 'edit-confirm-password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please confirm your password'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Password confirmation minimum length must be at least 10 characters'
                            },
                            {
                                type: 'match[edit-password]',
                                prompt: 'Passwords must match'
                            }
                        ]
                    },
                }
            });

            $('#edit-password-form').form('validate form');

            var isFormValid = $('#edit-password-form').form('is valid');

            if (isFormValid) {
                $('#password-change-cancel').addClass('disabled');
                $('#password-change-proceed').addClass('loading');

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

                            if (xhttp.responseText == 'Password change success') {
                                toastObj.class = 'success';
                                toastObj.title = 'Success';
                            }

                            $('#password-change-cancel').removeClass('disabled');
                            $('#password-change-proceed').removeClass('loading');

                            $('#edit-password-modal').modal('hide');
                            $('body').toast(toastObj);
                            getAllUsers();
                        } else {
                            console.log(xhttp.statusText)
                        }
                    }
                };

                xhttp.onerror = function(e) {
                    console.error(xhr.statusText);
                };

                xhttp.open('POST', './process/tims_updatePassword.php', true);

                var data = new FormData();

                var userId = $("#user-id-hidden").val();

                data.append('user-id', userId);
                data.append('password', $("#edit-password").val());
                data.append('confirm-password', $("#edit-confirm-password").val());

                xhttp.send(data);
            }
        }

        function submitEditUserForm() {
            var userId = $("#user-id-hidden").val();

            $("#edit-user").form({
                fields: {
                    contact_number: {
                        identifier: 'contact-number',
                        rules: [{
                                type: 'number',
                                prompt: 'Please a valid mobile number'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Mobile numbers must have at least 10 digits'
                            }
                        ]
                    },
                    email: {
                        identifier: 'email',
                        rules: [{
                            type: 'email',
                            prompt: 'Please enter a valid email'
                        }]
                    },
                    // password: {
                    //     identifier: 'password',
                    //     rules: [{
                    //         type: 'minLength[10]',
                    //         prompt: 'Password minimum length must be at least 10 characters'
                    //     }]
                    // },
                    // confirm_password: {
                    //     identifier: 'confirm-password',
                    //     rules: [{
                    //             type: 'minLength[10]',
                    //             prompt: 'Password confirmation minimum length must be at least 10 characters'
                    //         },
                    //         {
                    //             type: 'match[password]',
                    //             prompt: 'Passwords must match'
                    //         }
                    //     ]
                    // },
                }
            })

            var isFormValid = $('#edit-user').form('is valid');

            if (isFormValid) {
                $('#edit-user-submit').addClass('loading');
                $('#edit-user-submit').addClass('disabled');

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

                            if (xhttp.responseText == 'User update success') {
                                toastObj.class = 'success';
                                toastObj.title = 'Success';
                            }

                            $('#edit-user-submit').removeClass('loading');
                            $('#edit-user-submit').removeClass('disabled');

                            $('.ui.longer.modal').modal('hide');
                            $('body').toast(toastObj);
                            getAllUsers();
                        } else {
                            console.log(xhttp.statusText)
                        }
                    }
                };

                xhttp.onerror = function(e) {
                    console.error(xhr.statusText);
                };

                xhttp.open('POST', './process/tims_updateUser.php', true);

                var values = $('#edit-user').form('get values');

                var data = new FormData();

                data.append('user-id', userId);
                data.append('display-photo', document.getElementById('edit-display-photo').files[0]);
                data.append('first-name', $('#edit-first-name').val());
                data.append('last-name', $('#edit-last-name').val());
                data.append('position', $('#edit-position').val());
                data.append('contact-number', $('#edit-contact-number').val());
                data.append('email', $('#edit-email').val());
                // data.append('password', $('#password').val());
                // data.append('confirm-password', $('#confirm-password').val());

                xhttp.send(data);
            }



        }

        function changeDisplayPhotoPreview(input, context) {
            console.log('Change Display Photo Preview');
            var displayPhotoLocation = input.value;
            console.log('input value', input.value);
            var displayPhotoExtension = displayPhotoLocation.substring(displayPhotoLocation.lastIndexOf('.') + 1).toLowerCase();

            if (input.files && input.files[0] && (displayPhotoExtension == 'gif' || displayPhotoExtension == 'png' || displayPhotoExtension == 'jpg' || displayPhotoExtension == 'jpeg')) {

                console.log('Inside if');

                var fileReader = new FileReader();

                fileReader.onload = (e) => {
                    var target = '#create-display-photo-preview';

                    if (context == 'edit') {
                        console.log('edit context');
                        target = '#edit-display-photo-preview';
                    }

                    console.log('target result', e.target.result);
                    $(target).attr('src', e.target.result);
                }

                fileReader.readAsDataURL(input.files[0]);

                console.log('read as data url');
            } else {
                alert('File is invalid')
            }
        }

        function submitNewUserForm() {

            $('#add-new-user').form({
                fields: {
                    display_photo: {
                        identifier: 'create-display-photo',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please specify a display photo'
                        }]
                    },
                    first_name: {
                        identifier: 'create-first-name',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please enter your {name}'
                        }]
                    },
                    last_name: {
                        identifier: 'create-last-name',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please enter your {name}'
                        }]
                    },
                    position: {
                        identifier: 'create-position',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please enter your {name}'
                        }]
                    },
                    contact_number: {
                        identifier: 'create-contact-number',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your {name}'
                            },
                            {
                                type: 'number',
                                prompt: 'Please a valid mobile number'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Mobile numbers must have at least 10 digits'
                            }
                        ]
                    },
                    email: {
                        identifier: 'create-email',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your {name}'
                            },
                            {
                                type: 'email',
                                prompt: 'Please enter a valid email'
                            }
                        ]
                    },
                    password: {
                        identifier: 'create-password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter a password'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Password minimum length must be at least 10 characters'
                            }
                        ]
                    },
                    confirm_password: {
                        identifier: 'create-confirm-password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please confirm your password'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Password confirmation minimum length must be at least 10 characters'
                            },
                            {
                                type: 'match[create-password]',
                                prompt: 'Passwords must match'
                            }
                        ]
                    },
                    role: {
                        identifier: 'create-role',
                        rules: [{
                            type: 'empty',
                            prompt: 'Please specify a role'
                        }]
                    }
                }
            });

            var isFormValid = $('#add-new-user').form('is valid');

            if (isFormValid) {
                $('#new-user-submit').addClass('loading');
                $('#new-user-submit').addClass('disabled');

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

                            if (xhttp.responseText == 'User creation success') {
                                toastObj.class = 'success';
                                toastObj.title = 'Success';
                            }

                            $('#new-user-submit').removeClass('loading');
                            $('#new-user-submit').removeClass('disabled');

                            $('.ui.longer.modal').modal('hide');
                            $('body').toast(toastObj);
                            getAllUsers();
                        } else {
                            console.log(xhttp.statusText)
                        }
                    }
                };

                xhttp.onerror = function(e) {
                    console.error(xhr.statusText);
                };

                xhttp.open('POST', './process/tims_createNewUser.php', true);

                var values = $('#add-new-user').form('get values');

                var data = new FormData();

                // var passwordExtracted = $('#password').val();

                data.append('display-photo', document.getElementById('create-display-photo').files[0]);
                data.append('first-name', $('#create-first-name').val());
                data.append('last-name', $('#create-last-name').val());
                data.append('position', $('#create-position').val());
                data.append('contact-number', $('#create-contact-number').val());
                data.append('email', $('#create-email').val());
                data.append('role', $('#create-role').dropdown('get value'))
                data.append('password', $('#create-password').val());
                data.append('confirm-password', $('#create-confirm-password').val());

                // console.log("User Password length client: " + passwordExtracted.length);

                // xhttp.setRequestHeader('Content-type', 'multipart/form-data; boundary="---------------------------168261202239157867303724621122"');

                xhttp.send(data);
            }
        }

        function getAllUsers() {
            var xhttp = new XMLHttpRequest();

            xhttp.onload = (e) => {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        console.log(xhttp.responseText);

                        var results = JSON.parse(xhttp.responseText);

                        console.log(results);

                        // $("#users-table").html("");

                        var appendStr = "";

                        var role = sessionStorage.getItem('user_role');

                        if (role == 1) {
                            for (var i = 0; i < results.length; i++) {
                                appendStr += '<tr><td><strong>TC_USER-' + results[i].user_id + '</strong></td><td>' + results[i].user_last_name + '</td><td>' + results[i].user_first_name + '</td><td>' + results[i].user_position + '</td><td>' + results[i].user_contact_number + '</td><td>' + results[i].user_email + '</td><td>' + results[i].role_name + '</td><td>' + results[i].user_date_created + '</td><td>' + results[i].user_date_modified + '</td><td><span><i class="pencil alternate centered icon" style="cursor: pointer;" onclick="editUser(' + results[i].user_id + ')"></i>| <i class="trash alternate centered icon" style="cursor: pointer;" onclick="deleteUser(' + results[i].user_id + ')"></i></span></td></tr>'
                            }
                        } else {
                            for (var i = 0; i < results.length; i++) {
                                appendStr += '<tr><td><strong>TC_USER-' + results[i].user_id + '</strong></td><td>' + results[i].user_last_name + '</td><td>' + results[i].user_first_name + '</td><td>' + results[i].user_position + '</td><td>' + results[i].user_contact_number + '</td><td>' + results[i].user_email + '</td><td>' + results[i].role_name + '</td><td>' + results[i].user_date_created + '</td><td>' + results[i].user_date_modified + '</tr>';
                            }
                        }

                        // new Date(results[i].user_date_created).toUTCString();
                        $("#users-table-body").html(appendStr)
                    }
                }
            };

            xhttp.onerror = function(e) {
                console.error(xhr.statusText);
            };

            xhttp.open('POST', './process/tims_displayAllUsers.php', true);

            xhttp.send();
        }

        function editUser(userId) {
            $('#editUser').modal({
                onHide: function() {
                    console.log('modal hide');
                    // $('#add-new-user').form('reset');
                    // $('#add-new-user').form('clear');
                    $("#edit-user")[0].reset();
                },
                onShow: function() {
                    console.log('modal show');
                }
            }).modal('show');

            var xhttp = new XMLHttpRequest();

            xhttp.onload = (e) => {
                if (xhttp.readyState === 4) {
                    if (xhttp.status === 200) {
                        console.log(xhttp.responseText);

                        var result = JSON.parse(xhttp.responseText);

                        $("#edit-last-name-div").html('<label>Last Name</label><div class="ui left corner labeled input"><input type="text" name="edit-last-name" placeholder="Last Name" id="edit-last-name"></div>');

                        $("#edit-last-name").val(result[0].user_last_name);

                        $("#edit-first-name-div").html('<label>First Name</label><div class="ui left corner labeled input"><input type="text" name="edit-first-name" placeholder="First Name" id="edit-first-name"></div>');

                        $("#edit-first-name").val(result[0].user_first_name);

                        $("#edit-position-div").html('<label>Position</label><div class="ui left corner labeled input"><input type="text" name="edit-position" placeholder="Position" id="edit-position"></div>');

                        $("#edit-position").val(result[0].user_position);

                        $("#edit-contact-number-div").html('<label>Contact Number</label><div class="ui left corner labeled input"><input type="text" name="edit-contact-number" placeholder="Contact Number" id="edit-contact-number"></div>');

                        $("#edit-contact-number").val(result[0].user_contact_number);

                        $("#edit-email-div").html('<label>Contact Number</label><div class="ui left corner labeled input"><input type="text" name="edit-email" placeholder="Contact Number" id="edit-email"></div>');

                        $("#edit-email").val(result[0].user_email);

                        $("#placeholder-id").html('<img src="http://localhost/tomcat_web/users/process' + result[0].user_display_photo.substring(1, result[0].user_display_photo.length) + '?' + (new Date()).getTime() + '" id="edit-display-photo-preview" class="ui medium image">');

                        $("#user-id-hidden").val(result[0].user_id);

                        $("#edit-user-submit").removeClass("disabled");

                        $("#edit-password-submit").removeClass("disabled");

                        // $("#display-photo-edit").val(result[0].user_display_photo);

                    }
                }
            }

            xhttp.onerror = function(e) {
                console.error(xhr.statusText);
            };

            xhttp.open('POST', './process/tims_fetchUser.php', true);

            var data = new FormData();

            data.append('user-id', userId);

            xhttp.send(data);
        }
    </script>

    <script>
        // Initialization logic

        $("#add-new-user").submit(function(e) {
            e.preventDefault();
        });

        $('#add-new-user').validate({
            errorPlacement: function(error, element) {
                return true;
            }
        });

        $("#edit-user").submit(function(e) {
            e.preventDefault();
        });

        $('#edit-user').validate({
            errorPlacement: function(error, element) {
                return true;
            }
        });

        $("#edit-password-form").submit(function(e) {
            e.preventDefault();
        });

        $("#edit-password-form").validate({
            errorPlacement: function(error, element) {
                return true;
            }
        })

        $("#create-role").dropdown();

        $(document).ready(function() {
            var role = sessionStorage.getItem('user_role');

            if (role == 2) {
                $("#add-new-user-btn").hide();
                $("#actions-column").hide();
            }

            getAllUsers();

            $('#users-table').tablesort()
        });
    </script>

</body>

</html>`