<!-- Group 4 Cheese resetPassword.html Tyler Do -->
<html>

<head>
	<title>Reset Password</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
		<!-- Font Awesome Icons 4.7.0 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Main color Scheme -->
		<link rel="stylesheet" href="css/main.css">
</head>

<body>
<!-- Header Section -->
		<!-- Nav Bar -->
		<nav class="navbar navbar-expand-lg">
			<div class="container">
			<!-- User Icon -->
			<nav class="navbar navbar-light">
				<a class="navbar-brand" href="profile.html">
				<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				</a>
			</nav>
			<a class="navbar-brand" href="index.html">Cheese</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">People</a>
					<a class="nav-item nav-link" href="#">School</a>
					<a class="nav-item nav-link" href="#">Hobbies</a>
				</div>
			</div>
			<!-- Help Button -->
			<button type="button" class="button-style btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Click for help" onclick="alert('Welcome to Cheese! The site to help people connect during COVID. Create a User profile by selecting the user icon in the top left. To post a block click on the new block button. The main page displays recent and popular blocks from other students. The navigation bar links will help you navigate through different categories on the site. Thank you for becoming apart of the cheese family!')">
			<i class="fa fa-question-circle" aria-hidden="true"></i>
			</button>
			</div>
		</nav>
		
		<!-- Icon/Logo Section -->
	<section>
		<div class="container text-center" style="padding-top: 50px;">
		<h2 style="padding-bottom: 25px;">Cheese</h2>
			<figure class="figure">
				<i class="fa fa-grav" aria-hidden="true" style="font-size: 10em;"></i>
			</figure>
			<h3 style="padding-top: 25px;">Enter the email address you registered with for a password reset</h3>
		</div>
	</section>
	
		<!-- User Form -->
	<section>
		<div class="container" style="padding-top: 50px;">
			<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-lg">Username</span>
				</div>
				<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
			</div>
		</div>
	</section>
		
		<!-- Buttons -->
		<div class="container" style="text-align: center">
			<div class="row">
				<div class="col-md">
					<button class="button-style btn btn-info btn-lg" data-toggle="tooltip" data-placement="bottom" title="Cancel!">
					<a href="login.html">Cancel</a>
					</button>
					<button class="button-style btn btn-info btn-lg" data-toggle="tooltip" data-placement="bottom" title="Reset!" onclick="alert('Link sent to your email!')">
					<a href="login.html">Reset Password</a>
					</button>
				</div>
			</div>
		</div>
</body>

</html>