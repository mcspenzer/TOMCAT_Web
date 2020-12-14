$(document).ready(function () {
    $('#item-owner-select')
        .dropdown({
            apiSettings: {
                url: 'http://localhost/tomcat_web/users/process/tims_fetchUser.php?query=query',
                onResponse: function (response) {
                    console.log('ITEM-OWNER');
                    console.log('Dropdown response: ', response);
                },
                cache: false
            },
            filterRemoteData: true,
            saveRemoteData: false
        });

    $('#item-to-borrow-select')
        .dropdown({
            apiSettings: {
                url: 'http://localhost/tomcat_web/inventory/process/tims_fetchItem.php?query=query',
                onResponse: function (response) {
                    console.log('ITEM-TO-BORROW');
                    console.log('Dropdown response: ', response);
                },
                cache: false
            },
            filterRemoteData: true,
            saveRemoteData: false
        });

    $('#item-return-select')
        .dropdown({
            apiSettings: {
                url: 'http://localhost/tomcat_web/inventory/process/tims_fetchItem.php?return=' + sessionStorage.getItem('user_id'),
                onResponse: function (response) {
                    console.log('ITEM-TO-RETURN');
                    console.log('Dropdown response: ', response);
                },
                cache: false
            },
            filterRemoteData: true,
            saveRemoteData: false
        });

    $("#add-item-form").submit(function (e) {
        e.preventDefault();
    });

    $('#edit-item-form').submit(function (e) {
        e.preventDefault();
    });

    $('#borrow-item-form').submit(function (e) {
        e.preventDefault();
    });

    $('#return-item-form').submit(function (e) {
        e.preventDefault();
    });

    getAllItems();
});

function borrowItem() {
    $('#borrowItemModal').modal({
        onHide: function () {
            console.log('modal hide');
            // $('#add-new-user').form('reset');
            // $('#add-new-user').form('clear');
            $("#borrow-item-form")[0].reset();
        },
        onShow: function () {
            console.log('modal show');
            $('#borrow-item-submit').removeClass('disabled');
        }
    }).modal('show');
}

function createNewItem() {
    $('#createNewUser')
        .modal('show');
}

function deleteItem(itemId) {
    console.log('deleteItem');

    $("#delete-item-modal").modal({
        onApprove: function () {
            submitDeleteItemForm(itemId);
        }

    }).modal('show');

    var xhttp = new XMLHttpRequest();

    xhttp.onload = (e) => {
        if (xhttp.readyState === 4) {
            if (xhttp.status === 200) {
                console.log(xhttp.responseText);

                var result = JSON.parse(xhttp.responseText);

                $("#delete-content").html('<h3>Do you want to delete <strong>' + result[0].item_serial_number + '?</strong></h3>');
            }
        }
    }

    xhttp.onerror = function (e) {
        console.error(xhr.statusText);
    };

    xhttp.open('POST', './process/tims_fetchItem.php', true);

    var data = new FormData();

    data.append('item-id', itemId);

    xhttp.send(data);
}

function editItem(itemId) {
    console.log('editItem');

    $('#editUserModal').modal({
        onHide: function () {
            console.log('modal hide');
            // $('#add-new-user').form('reset');
            // $('#add-new-user').form('clear');
            $("#edit-item-form")[0].reset();
        },
        onShow: function () {
            console.log('modal show');
        }
    }).modal('show');

    var xhttp = new XMLHttpRequest();

    xhttp.onload = (e) => {
        if (xhttp.readyState === 4) {
            if (xhttp.status === 200) {
                console.log(xhttp.responseText);

                var result = JSON.parse(xhttp.responseText);

                $("#edit-serial-number-div").html('<label>Serial Number</label><div class="ui left corner labeled input"><input required type="text" name="edit-serial-number" placeholder="Serial Number" id="edit-serial-number"><div class="ui left corner label"><i class="asterisk icon"></i></div></div>');

                $("#edit-serial-number").val(result[0].item_serial_number);

                $("#edit-item-name-div").html('<label>Item Name</label><div class="ui left corner labeled input"><input required type="text" name="edit-item-name" placeholder="Item Name" id="edit-item-name"><div class="ui left corner label"><i class="asterisk icon"></i></div> </div>');

                $("#edit-item-name").val(result[0].item_name);

                $("#edit-item-type-div").html('<label>Item Type</label><div class="ui left corner labeled input"><input required type="text" name="edit-item-type" placeholder="Item Type" id="edit-item-type"><div class="ui left corner label"><i class="asterisk icon"></i></div></div>');

                $("#edit-item-type").val(result[0].item_type);

                $("#edit-item-owner-div").html('<label>Item Owner</label><select class="ui search selection dropdown" id="edit-item-owner-select"><option value="" disabled selected>Lastname, Firstname</option></select>');

                $('#edit-item-owner-select')
                    .dropdown({
                        apiSettings: {
                            url: 'http://localhost/tomcat_web/users/process/tims_fetchUser.php?query=query',
                            onResponse: function (response) {
                                console.log('Dropdown response: ', response);
                                // $("#edit-item-owner-select").dropdown('set text', result[0].item_owner);
                                // $("#edit-item-owner-select").dropdown('set value', result[0].item_owner);
                            },
                            cache: false
                        },
                        filterRemoteData: false,
                        saveRemoteData: false,
                    });

                // $('i.dropdown.icon')[2].click(function() {
                //     // $("#edit-item-owner-select").dropdown('refresh');
                // });

                console.log('Username', result[0].user_name);

                $("#edit-item-owner-select").dropdown('set text', result[0].user_name);
                $("#edit-item-owner-select").dropdown('set value', result[0].item_owner);


                $('#item-id-hidden').val(result[0].item_id);
                $("#edit-item-submit").removeClass("disabled");

            }
        }
    }

    xhttp.onerror = function (e) {
        console.error(xhr.statusText);
    };

    xhttp.open('POST', './process/tims_fetchItem.php', true);

    var data = new FormData();

    data.append('item-id', itemId);

    xhttp.send(data);
}

function getAllItems() {
    console.log('getAllItems')
    var xhttp = new XMLHttpRequest();

    xhttp.onload = (e) => {
        if (xhttp.readyState === 4) {
            if (xhttp.status === 200) {
                console.log(xhttp.responseText);

                var results = JSON.parse(xhttp.responseText);

                var appendStr = "";

                var role = sessionStorage.getItem('user_role');

                if (role == 1) {
                    console.log('Administrator');
                    for (var i = 0; i < results.length; i++) {
                        appendStr += '<tr><td><strong>TC_ITEM-' + results[i].item_id + '</strong></td><td>' + results[i].item_serial_number + '</td><td>' + results[i].item_name + '</td><td>' + results[i].item_type + '</td><td>' + results[i].item_status + '</td><td>' + results[i].item_owner + '</td><td>' + results[i].item_remarks + '</td><td>' + results[i].item_date_created + '</td><td>' + results[i].item_date_modified + '</td><td><span><i class="pencil alternate centered icon" style="cursor: pointer;" onclick="editItem(' + results[i].item_id + ')"></i>| <i class="trash alternate centered icon" style="cursor: pointer;" onclick="deleteItem(' + results[i].item_id + ')"></i></span></td></tr>'
                    }
                } else {
                    console.log('Viewer');
                    for (var i = 0; i < results.length; i++) {
                        appendStr += '<tr><td><strong>TC_ITEM-' + results[i].item_id + '</strong></td><td>' + results[i].item_serial_number + '</td><td>' + results[i].item_name + '</td><td>' + results[i].item_type + '</td><td>' + results[i].item_status + '</td><td>' + results[i].item_owner + '</td><td>' + results[i].item_remarks + '</td><td>' + results[i].item_date_created + '</td><td>' + results[i].item_date_modified + '</td></tr>'
                    }
                }

                // new Date(results[i].user_date_created).toUTCString();
                $("#items-table-body").html(appendStr)
            }
        }
    };

    xhttp.onerror = function (e) {
        console.error(xhr.statusText);
    };

    xhttp.open('POST', './process/tims_displayAllItems.php', true);

    xhttp.send();
}

function returnItem() {
    $("#returnItemModal").modal({
        onHide: function () {
            console.log('modal hide');
            // $('#add-new-user').form('reset');
            // $('#add-new-user').form('clear');
            $("#return-item-form")[0].reset();
        },
        onShow: function () {
            console.log('modal show');
            $('#return-item-submit').removeClass('disabled');
        }
    }).modal('show');
}

function submitBorrowItemForm() {
    var validationObject = {
        fields: {
            item_to_borrow: {
                identifier: 'item-to-borrow-select',
                rules: [{
                    type: 'empty',
                    prompt: 'Please specify an item to borrow'
                }]
            },
        }
    }

    if ($('#externalBorrower').checkbox('is checked')) {
        validationObject.fields.external_first = {
            identifier: 'externalFirstName',
            rules: [{
                type: 'empty',
                prompt: 'Please specify the external borrower\'s first name'
            }]
        }

        validationObject.fields.external_last = {
            identifier: 'externalLastName',
            rules: [{
                type: 'empty',
                prompt: 'Please specify the external borrower\'s last name'
            }]
        }
    }

    $('#borrow-item-form').form(validationObject);

    var isFormValid = $('#borrow-item-form').form('is valid');

    if (isFormValid) {
        $('#borrow-item-submit').addClass('disabled');
        $('#borrow-item-submit').addClass('loading');

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

                    if (xhttp.responseText == 'Item borrow success') {
                        toastObj.class = 'success';
                        toastObj.title = 'Success';
                    }

                    $('#borrow-item-submit').removeClass('disabled');
                    $('#borrow-item-submit').removeClass('loading');

                    $('#borrowItemModal').modal('hide');
                    $('body').toast(toastObj);
                    getAllItems();
                } else {
                    console.log(xhttp.statusText)
                }
            }
        };

        xhttp.onerror = function (e) {
            console.error(xhr.statusText);
        };

        xhttp.open('POST', './process/tims_borrowItem.php', true);

        var data = new FormData();

        data.append('borrow-log-item-borrowed', $('#item-to-borrow-select').dropdown('get value'));
        data.append('borrow-log-borrower', sessionStorage.getItem('user_id'));
        data.append('borrow-log-external-first-name', $('#externalFirstName').val());
        data.append('borrow-log-external-last-name', $('#externalLastName').val());

        xhttp.send(data);
    }
}

function submitDeleteItemForm(itemId) {
    console.log('submitDeleteItem');

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

                if (xhttp.responseText == 'Item archiving success') {
                    toastObj.class = 'success';
                    toastObj.title = 'Success';
                }

                $('#proceed-delete').removeClass('loading');
                $('#cancel-delete').removeClass('disabled');

                $('#delete-user-modal').modal('hide');
                $('body').toast(toastObj);
                getAllItems();
            }
        }
    }

    xhttp.onerror = function (e) {
        console.error(xhr.statusText);
    };

    xhttp.open('POST', './process/tims_deleteItem.php', true);

    var data = new FormData();

    data.append('item-id', itemId);

    xhttp.send(data);
}

function submitEditItemForm() {
    console.log('submitEditItemForm');

    $("#edit-item-form").form({
        fields: {
            edit_serial_number: {
                identifier: 'edit-serial-number',
                rules: [{
                    type: 'empty',
                    prompt: 'Please specify the serial number'
                }]
            },
            edit_item_name: {
                identifier: 'edit-item-name',
                rules: [{
                    type: 'empty',
                    prompt: 'Please specify the item name'
                }]
            },
            edit_item_type: {
                identifier: 'edit-item-type',
                rules: [{
                    type: 'empty',
                    prompt: 'Please specify the item type'
                }]
            },
            edit_item_owner: {
                identifier: 'edit-item-owner-select',
                rules: [{
                    type: 'empty',
                    prompt: 'Please specify the item owner'
                }]
            }
        }
    });

    var isFormValid = $('#edit-item-form').form('is valid');

    if (isFormValid) {
        $('#edit-item-submit').addClass('disabled');
        $('#edit-item-submit').addClass('loading');

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

                    if (xhttp.responseText == 'Item update success') {
                        toastObj.class = 'success';
                        toastObj.title = 'Success';
                    }

                    $('#edit-item-submit').removeClass('disabled');
                    $('#edit-item-submit').removeClass('loading');

                    $('#editUserModal').modal('hide');
                    $('body').toast(toastObj);
                    getAllItems();
                } else {
                    console.log(xhttp.statusText)
                }
            }
        };

        xhttp.onerror = function (e) {
            console.error(xhr.statusText);
        };

        xhttp.open('POST', './process/tims_updateItem.php', true);

        var data = new FormData();

        data.append('edit-item-id', $('#item-id-hidden').val());
        data.append('edit-serial-number', $('#edit-serial-number').val());
        data.append('edit-item-name', $("#edit-item-name").val());
        data.append('edit-item-type', $("#edit-item-type").val());
        data.append('edit-item-owner-select', $('#edit-item-owner-select').val())

        xhttp.send(data);
    }
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

        xhttp.onerror = function (e) {
            console.error(xhr.statusText);
        };

        xhttp.open('POST', './process/tims_createNewItem.php', true);

        var data = new FormData();

        data.append('serial-number', $('#serial-number').val());
        data.append('item-name', $('#item-name').val());
        data.append('item-type', $('#item-type').val());
        data.append('item-owner', $('#item-owner-select').dropdown('get value'));
        data.append('item-remarks', $("#item-remarks").val());

        // xhttp.setRequestHeader('Content-type', 'multipart/form-data; boundary="---------------------------168261202239157867303724621122"');

        xhttp.send(data);
    }
}

function submitReturnItemForm() {

    var validationObject = {
        fields: {
            item_return_select: {
                identifier: 'item-return-select',
                rules: [{
                    type: 'empty',
                    prompt: 'Please specify an item to return'
                }]
            }
        }
    }

    if ($('#externalBorrower').checkbox('is checked')) {
        validationObject.fields.external_first = {
            identifier: 'externalFirstName',
            rules: [{
                type: 'empty',
                prompt: 'Please specify the external borrower\'s first name'
            }]
        }

        validationObject.fields.external_last = {
            identifier: 'externalLastName',
            rules: [{
                type: 'empty',
                prompt: 'Please specify the external borrower\'s last name'
            }]
        }
    }

    $('#return-item-form').form(validationObject);

    var isFormValid = $('#return-item-form').form('is valid');

    if (isFormValid) {
        $('#return-item-submit').addClass('loading');
        $('#return-item-submit').addClass('disabled');

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

                    if (xhttp.responseText == 'Item return success') {
                        toastObj.class = 'success';
                        toastObj.title = 'Success';
                    }

                    $('#return-item-submit').removeClass('loading');
                    $('#return-item-submit').removeClass('disabled');

                    $('#returnItemModal').modal('hide');
                    $('body').toast(toastObj);
                    getAllItems();
                } else {
                    console.log(xhttp.statusText)
                }
            }
        };

        xhttp.onerror = function (e) {
            console.error(xhr.statusText);
        };

        xhttp.open('POST', './process/tims_returnItem.php', true);

        var data = new FormData();

        data.append('return-log-item-returned', $('#item-return-select').dropdown('get value'));
        data.append('return-log-returner', sessionStorage.getItem('user_id'));

        // xhttp.setRequestHeader('Content-type', 'multipart/form-data; boundary="---------------------------168261202239157867303724621122"');

        xhttp.send(data);
    }
}