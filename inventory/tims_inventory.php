<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Inventory</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/ext/fomatic/semantic.min.css">
</head>

<body style="background-image: linear-gradient(to bottom, white, rgba(255,255,204,1))"> 
    <?php require '../html/tims_header.php'; ?>

    <h2 class="ui header" style="margin-top: 5em;margin-left: 2em">
        <i class="boxes centered icon"></i>
        <div class="content">
            Inventory
        </div>
    </h2>

    <div class="ui middle aligned center aligned" style="margin-top: 2em">
        <div class="ui grid" style="margin-left: 10em; margin-right: 10em">
            <div class="left floated two wide column">
                <div class="ui vertical menu" style="margin-top: 3em; margin-left:-7em">
                    <a class="item" href="../users/tims_users.php">
                        Go to Users
                        <!-- <div class="ui teal left pointing label">1</div> -->
                    </a>
                    <a class="item" href="../reports/tims_reports.php">
                        Go to Reports
                        <!-- <div class="ui label">51</div> -->
                    </a>
                    <div class="item" id="borrow-item-btn">
                        <div class="ui secondary button centered" style="margin-left: 1.5em" onclick="borrowItem()"><i class="dolly icon"></i>Borrow Item&nbsp;&nbsp;&nbsp;</div>
                        <div class="ui button centered" style="margin-left: 1.5em;margin-top: 1em" onclick="returnItem()"><i class="warehouse icon"></i>Return Item&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    </div>
                    <div class="item" id="add-item-btn">
                        <div class="ui primary button centered green" style="margin-left: 1.5em" onclick="createNewItem()"><i class="box icon"></i>Add new Item</div>
                    </div>
                </div>
            </div>
            <div class="thirteen wide column">
                <table class="ui very basic compact collapsing celled table sortable" style="font-size:small" id="items-table">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th class="sorted ascending">Serial Number</th>
                            <th>Item Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Owner</th>
                            <th>Remarks</th>
                            <th>Date created</th>
                            <th>Date modified</th>
                            <th id="actions-column">Actions</th>
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
                <div class="field">
                    <label>Item Remarks</label>
                    <textarea rows="3" id="item-remarks"></textarea>
                </div>
                <button class="ui button" type="submit" onclick="submitNewItemForm()" id="new-item-submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="ui modal" id="editUserModal">
        <i class="close icon"></i>
        <div class="header">
            Edit Item
        </div>
        <div class="ui container" style="padding: 1em">
            <form class="ui form" id="edit-item-form">
                <input type="hidden" id="item-id-hidden" name="item-id" value="">
                <div class="field" id="edit-serial-number-div">
                    <label>Serial Number</label>
                    <div class="ui placeholder">
                        <div class="medium line"></div>
                    </div>
                </div>
                <div class="field" id="edit-item-name-div">
                    <label>Item Name</label>
                    <div class="ui placeholder">
                        <div class="medium line"></div>
                    </div>
                </div>
                <div class="field" id="edit-item-type-div">
                    <label>Item Type</label>
                    <div class="ui placeholder">
                        <div class="medium line"></div>
                    </div>
                </div>
                <div class="field" id="edit-item-owner-div">
                    <label>Item Owner</label>
                    <div class="ui placeholder">
                        <div class="medium line"></div>
                    </div>
                </div>
                <button class="ui button disabled" type="submit" onclick="submitEditItemForm()" id="edit-item-submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="ui basic modal" id="delete-item-modal">
        <div class="ui icon header">
            <i class="archive icon"></i>
            <h1>Archive Item?</h1>
        </div>
        <div class="content" id="delete-content">
            <p>Do you want to archive the following item?: </p>
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

    <div class="ui modal" id="borrowItemModal">
        <i class="close icon"></i>
        <div class="header">
            Borrow Item
        </div>
        <div class="ui container" style="padding: 1em">
            <form class="ui form" id="borrow-item-form">
                <div class="field required">
                    <label>Item to borrow</label>
                    <select class="ui search selection dropdown" id="item-to-borrow-select">
                        <option value="" disabled selected>Item Name</option>
                    </select>
                </div>
                <div class="inline field">
                    <div class="ui slider checkbox" id="externalBorrower">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>External Borrower</label>
                    </div>
                    <label></label>
                </div>
                <div class="fields">
                    <div class="field disabled" id="externalFirstDisabled">
                        <label>First name</label>
                        <input type="text" placeholder="First Name" id="externalFirstName">
                    </div>
                    <div class="field disabled" id="externalLastDisabled">
                        <label>Last name</label>
                        <input type="text" placeholder="Last Name" id="externalLastName">
                    </div>
                </div>
                <button class="ui button disabled" type="submit" onclick="submitBorrowItemForm()" id="borrow-item-submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="ui modal" id="returnItemModal">
        <i class="close icon"></i>
        <div class="header">
            Return Item
        </div>
        <div class="ui container" style="padding: 1em">
            <form class="ui form" id="return-item-form">
                <div class="field required">
                    <label>Item to return</label>
                    <select class="ui search selection dropdown" id="item-return-select">
                        <option value="" disabled selected>Item Name</option>
                    </select>
                </div>
                <button class="ui button disabled" type="submit" onclick="submitReturnItemForm()" id="return-item-submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/additional-methods.min.js"></script>
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    <script src="../assets/js/header-methods.js"></script>
    <script src="../assets/js/inventory/tims_inventory.js?ver<%=DateTime.Now.Ticks.ToString()%>"></script>
    <script src='../assets/ext/semantic/tablesort.js'></script>

    <script>
        $('#externalBorrower')
            .checkbox({
                onChecked: function() {
                    console.log('checked');
                    $('#externalLastDisabled').removeClass('disabled')
                    $('#externalFirstDisabled').removeClass('disabled')
                    $('#externalLastDisabled').addClass('required')
                    $('#externalFirstDisabled').addClass('required');
                },
                onUnchecked: function() {
                    console.log('unchecked');
                    $('#externalLastDisabled').addClass('disabled')
                    $('#externalFirstDisabled').addClass('disabled');
                    $('#externalLastDisabled').removeClass('required')
                    $('#externalFirstDisabled').removeClass('required')
                    $('#externalLastName').val('');
                    $('#externalFirstName').val('');
                },
            });
    </script>
    <script>
        $(document).ready(function() {
            var role = sessionStorage.getItem('user_role');

            console.log('role id', role)

            if (role == 2) {
                $('#borrow-item-btn').hide();
                $('#add-item-btn').hide();
                $("#actions-column").hide();
            }

            $("#items-table").tablesort()
        })
    </script>
</body>

</html>