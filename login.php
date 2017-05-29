<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Hippo Cabs</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>

	
</head>
<body>
    
	<?php include('header.php'); ?>	
<!-- Main -->
	<main class="main login-container" role="main">
		<div class="container">
			
			<div class="col-sm-6">
				<div class="box-content">
					<div class="login-head">
						<span class="hippo-icons man"></span>
						<span class="active">Login</span>
					</div>
					
					<form>
						<div class="f-row">
							<div><input type="text" class="form-control" id="username" placeholder="Email" /></div>
						</div>
						<div class="f-row">
							<div><input type="text" class="form-control" id="password" placeholder="password" /></div>
						</div>
						<div class="f-row">
							<div class="full-width check">
								<input type="checkbox" id="checkbox" />
								<label for="checkbox">Remember me</label>
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<button type="submit" value="Login" class="btn btn-red btn-shadow" >Login</button>
							</div>
						</div>
						
						<p><a data-toggle="modal" data-target="#forgotPassword">Forgot Password</a></p>
						
												
						<p>Dont have an account? <a href="signup.php">click here</a> to Sign up.</p>
						
						<div class="social-login">
							<h2>Or Login with</h2>
							<a href="#" class="signup-fb"><span class="bg"><small class="hippo-icons"></small></span><span>Sign in with Facebook</span></a>
							<a href="#" class="signup-g"><span class="bg"><small class="hippo-icons"></small></span><span>Sign in with Google</span></a>
						</div>
					</form>
				</div>
			</div>			
			<div class="divider-space-small visible-xs"></div>	
			<div class="col-sm-6" align="center">
				<img src="images/login-banner.jpg" />
			</div>
			
		</div><!-- .Container -->
		
		
		
	</main>
<!-- //Main -->

<?php include('footer.php'); ?>	



  


</body>
</html>