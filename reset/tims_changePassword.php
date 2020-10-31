<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMS | Reset</title>
    <link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/ext/fomatic/semantic.min.css">
    <style type="text/css">
        body {
            background-color: #DADADA;
        }

        body>.grid {
            height: 100%;
        }

        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }
    </style>
</head>

<body>

    <div class="ui fixed menu">
        <div class="ui container">
            <a href="#" class="header item">
                <img class="logo" src="https://via.placeholder.com/150" style="margin-right:0.5em">
                TIMS | TOMCAT Information Management System
            </a>
        </div>
    </div>

    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
                <div class="content">
                    Reset password
                </div>
            </h2>
            <?php

            $selector = $_GET['selector'];
            $validator = $_GET['validator'];

            if (empty($selector) || empty($validator)) {
            ?>
                <form class="ui large form" id="user-reset-form" accept-charset="UTF-8">
                    <div class="ui stacked segment">
                        <div class="field">
                            <label>Link invalid. Please try again.</label>
                        </div>
                    </div>
                    <div class="ui error message"></div>
                </form>
                <?php
            } else {
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>
                    <form class="ui large form" id="user-reset-form" accept-charset="UTF-8">
                        <div class="ui stacked segment">
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input type="password" name="email" placeholder="New Password" id="new-password">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="check icon"></i>
                                    <input type="password" name="email" placeholder="Confirm Password" id="confirm-new-password">
                                </div>
                            </div>
                            <div class="ui fluid large teal submit button" id="login-button" onclick="changePassword()">Change Password</div>
                        </div>
                        <div class="ui error message"></div>
                        <input type="hidden" name="selector" id="selector" value="<?php echo $selector ?>">
                        <input type="hidden" name="validator" id="validator" value="<?php echo $validator ?>">
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <div class="ui basic modal" id="password-reset-successful">
        <div class="ui icon header">
            <i class="archive icon"></i>
            <h1>Password reset successful</h1>
        </div>
        <div class="content" id="delete-content">
            <p>Your password has been successfully reset. Click the button below to redirect to the login page</p>
        </div>
        <div class="actions">
            <div class="ui green ok inverted button" id="proceed-delete">
                <i class="external alternate icon"></i>
                Back to Login
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src='../assets/ext/semantic/semantic.min.js'></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/additional-methods.min.js"></script>
    <script src='../assets/ext/fomatic/semantic.min.js'></script>
    <!-- <script src="../assets/js/header-methods.js"></script> -->

    <script>
        $("#user-reset-form").submit(function(e) {
            e.preventDefault();
        });
    </script>

    <script>
        function changePassword() {
            // window.location.href = "../home/tims_home.php";

            console.log('- Initialized reset')

            $('#user-reset-form').form({
                fields: {
                    password: {
                        identifier: 'new-password',
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
                        identifier: 'confirm-new-password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please confirm your password'
                            },
                            {
                                type: 'minLength[10]',
                                prompt: 'Password confirmation minimum length must be at least 10 characters'
                            },
                            {
                                type: 'match[new-password]',
                                prompt: 'Passwords must match'
                            }
                        ]
                    }
                }
            });

            var isFormValid = $('#user-reset-form').form('is valid');

            if (isFormValid) {
                $('#login-button').addClass('loading');
                $('#login-button').addClass('disabled');

                var newPassword = $('#new-password').val();
                var confirmNewPassword = $('#confirm-new-password').val();
                var selector = $('#selector').val();
                var validator = $('#validator').val();

                var xhttp = new XMLHttpRequest();

                xhttp.onload = (e) => {
                    if (xhttp.readyState === 4) {
                        if (xhttp.status === 200) {

                            var toastObj = {
                                class: 'error',
                                title: 'Error',
                                position: 'bottom right',
                                showIcon: 'exclamation',
                                showProgress: 'bottom'
                            }

                            toastObj.message = xhttp.responseText;

                            console.log('- Auth response', xhttp.responseText);

                            $('#login-button').removeClass('loading');
                            $('#login-button').removeClass('disabled');

                            if (xhttp.responseText == 'Password reset successful') {
                                toastObj.class = 'success';
                                toastObj.title = 'Success';
                            }

                            $('#password-reset-successful').modal({
                                onApprove: function() {
                                    window.location.replace("../login/tims_login.php?");
                                },
                                onDeny: function() {
                                    return false;
                                }
                            }).modal('show');

                        }
                    }
                }

                xhttp.onerror = function(e) {
                    console.error(xhr.statusText);
                };

                xhttp.open('POST', './process/tims_changePasswordProcess.php', true);

                var data = new FormData();

                data.append('new-password', newPassword);
                data.append('confirm-new-password', confirmNewPassword);
                data.append('selector', selector);
                data.append('validator', validator);

                xhttp.send(data);
            }
        }
    </script>
</body>

</html>