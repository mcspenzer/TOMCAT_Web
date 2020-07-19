<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TIMS | Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/ext/semantic/semantic.min.css" />
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
				<img src="https://via.placeholder.com/150" class="image">
				<div class="content">
					Log-in to your account
				</div>
			</h2>
			<form class="ui large form" id="user-login-form" accept-charset="UTF-8">
				<div class="ui stacked segment">
					<div class="field">
						<div class="ui left icon input">
							<i class="user icon"></i>
							<input type="text" name="email" placeholder="Email" id="user-email">
						</div>
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="lock icon"></i>
							<input type="password" name="password" placeholder="Password" id="user-password">
						</div>
					</div>
					<div class="ui fluid large teal submit button" id="login-button" onclick="login()">Login</div>
				</div>

				<div class="ui error message"></div>

			</form>

			<div class="ui message">
				<a href="#">Forgot your password?</a>
			</div>
		</div>
	</div>

	<script src="../assets/js/jquery-3.5.1.min.js"></script>
	<script src='../assets/ext/semantic/semantic.min.js'></script>
	<script src="../assets/js/jquery.validate.min.js"></script>
	<script src="../assets/js/additional-methods.min.js"></script>
	<script src='../assets/ext/fomatic/semantic.min.js'></script>

	<script>
		$(document)
			.ready(function() {
				$('.ui.form')
					.form({
						fields: {
							email: {
								identifier: 'email',
								rules: [{
										type: 'empty',
										prompt: 'Please enter your e-mail'
									},
									{
										type: 'email',
										prompt: 'Please enter a valid e-mail'
									}
								]
							},
							password: {
								identifier: 'password',
								rules: [{
										type: 'empty',
										prompt: 'Please enter your password'
									},
									{
										type: 'length[6]',
										prompt: 'Your password must be at least 6 characters'
									}
								]
							}
						}
					});
			});

		$("#user-login-form").submit(function(e) {
			e.preventDefault();
		});
	</script>

	<script>
		function login() {
			// window.location.href = "../home/tims_home.php";

			console.log('- Initialized Login')

			var isFormValid = $('#user-login-form').form('is valid');

			if (isFormValid) {
				$('#login-button').addClass('loading');
				$('#login-button').addClass('disabled');

				var userEmail = $('#user-email').val();
				var userPassword = $('#user-password').val();

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
                            
                          
							if (typeof(Storage) == "undefined") {
								console.log('- Browser unsupported');

								toastObj.message = 'Browser unsupported'
								$('body').toast(toastObj);
							} else {
								console.log('- Adding localStorage');

								try {
									var results = JSON.parse(xhttp.responseText);

									for (var key in results) {
										if (results.hasOwnProperty(key)) {
											sessionStorage.setItem(key, results[key]);
										}
									}

									window.location.replace("../home/tims_home.php");
								} catch (error) {
									toastObj.message = error;
									$('body').toast(toastObj);
								}
							}
						}
					}
				}

				xhttp.onerror = function(e) {
					console.error(xhr.statusText);
				};

				xhttp.open('POST', './process/tims_authenticateUser.php', true);

				var data = new FormData();

				data.append('user-email', userEmail);
				data.append('user-password', userPassword);

				// xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');

				console.log("User Password length client: " + userPassword.length);

				xhttp.send(data);
			}
		}
	</script>
</body>

</html>