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
            <form class="ui large form" id="user-reset-form" accept-charset="UTF-8">
                <div class="ui stacked segment" id='prompt-box'>
                    <div class="field">
                        <label>Please enter your email address</label>
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="email" placeholder="Email" id="user-email">
                        </div>
                    </div>
                    <div class="ui fluid large teal submit button" id="login-button" onclick="reset()">Send reset link</div>
                </div>

                <div class="ui error message"></div>
            </form>
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
        function reset() {
            // window.location.href = "../home/tims_home.php";

            console.log('- Initialized reset')

            $('#user-reset-form').form({
                fields: {
                    email: {
                        identifier: 'user-email',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your email address'
                            },
                            {
                                type: 'email',
                                prompt: 'Please enter a valid email'
                            }
                        ]
                    }
                }
            });

            var isFormValid = $('#user-reset-form').form('is valid');

            if (isFormValid) {
                $('#login-button').addClass('loading');
                $('#login-button').addClass('disabled');
                $('#user-email').addClass('disabled');

                var userEmail = $('#user-email').val();

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

                            if (xhttp.responseText == 'Email reset link sent') {
                                toastObj.class = 'success';
                                toastObj.title = 'Success';

                                $('#prompt-box').html('<h3>Email Sent!</h3><p>An email containing instructions to reset your password has been sent on the specified email address. Please allow for 3-5 minutes for the email to come through. Also check your spam folder for the instructions in the event that there\'s no instructions received.</p><br/><input class="ui teal large button" type="button" value="Back to Login" onclick="window.location.replace(\'../login/tims_login.php\');">');
                            }

                            $('#login-button').removeClass('loading');
                            $('#login-button').removeClass('disabled');
                            $('#user-email').addClass('disabled');

                            $('#user-email').val('');

                            $('body').toast(toastObj);
                            
                        }
                    }
                }

                xhttp.onerror = function(e) {
                    console.error(xhr.statusText);
                };

                xhttp.open('POST', './process/tims_resetPasswordProcess.php', true);

                var data = new FormData();

                data.append('user-email', userEmail);

                xhttp.send(data);
            }
        }
    </script>
</body>

</html>