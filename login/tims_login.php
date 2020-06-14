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
	</script>
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
			<form class="ui large form">
				<div class="ui stacked segment">
					<div class="field">
						<div class="ui left icon input">
							<i class="user icon"></i>
							<input type="text" name="email" placeholder="Username">
						</div>
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="lock icon"></i>
							<input type="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="ui fluid large teal submit button" onclick="login()">Login</div>
				</div>

				<div class="ui error message"></div>

			</form>

			<div class="ui message">
				<a href="#">Forgot your password?</a>
			</div>
		</div>
	</div>

	<script src='../assets/ext/semantic/semantic.min.js'></script>
	<script>
		function login() {
			window.location.href = "../home/tims_home.php";
		}
	</script>
</body>

</html>