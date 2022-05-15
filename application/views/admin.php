<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <!-- Site favicon -->
	<link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.ico")?>">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="<?php echo base_url("assets")?>/fonts/googleFont.css" rel="stylesheet">
	<link href="<?php echo base_url("assets")?>/fonts/googleFont2.css" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="<?php echo base_url("assets")?>/fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="<?php echo base_url("assets")?>/fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets")?>/css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets")?>/css/style.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets")?>/css/media.css">

</head>
<body>
	<main class="cd-main">
		<section class="cd-section index2 visible">
			<div class="cd-content style2">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Sign In</h3>
									<form action = "LoginController" method="POST">
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="User name" name="username">
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group margin-bottom-30px forgot-password-field">
											<input type="password" class="form-control" placeholder="Password" name="password">
											<div class="field-icon"><i class="ion-locked"></i></div>
											<a href="javascript:;" class="forgot-password-click">Forgot?</a>
										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Sign In">
										</div>
									</form>
									<div class="sign-up-txt">
										Don't have an account? <a href="javascript:;" class="sign-up-click">Signup</a>
									</div>
								</div>
							</div>
						</div>
						<!-- login slide end -->
						<!-- signup slide start -->
						<div class="signup-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Sign Up</h3>
									<form action="LoginController/signup" method="POST" name="signup">
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Name" name="username">
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Email" name="email">
											<div class="field-icon"><i class="ion-ios-email"></i></div>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password" name="password">
											<div class="field-icon"><i class="ion-locked"></i></div>
										</div>
										<div class="form-group margin-bottom-30px">
											<input type="password" class="form-control" placeholder="Confirm Password" name="password2" onkeyup="alert()">
											<div class="field-icon"><i class="ion-locked"></i></div>
											<div id="alert"></div>
											<script>
												function alert() {
													var password=document.forms["signup"]["password"].value;
													var password2=document.forms["signup"]["password2"].value;
													if(password!=password2){
														document.getElementById("alert").innerHTML = "<div class=\"sign-up-txt\">les mots de passes ne correspondent pas</div>";
														document.getElementById("submit").innerHTML = "<label type=\"text\" class=\"submit\" placeholder=\"Sign Up\"></label>";
													}else{
														document.getElementById("alert").innerHTML = "";
														document.getElementById("submit").innerHTML = "<input type=\"submit\" class=\"submit\" value=\"Sign Up\">";

													}
												}
											</script>
										</div>
										<div class="form-group sign-in-btn" id="submit">
											<input type="submit" class="submit" value="Sign Up">
										</div>
									</form>
									<div class="sign-up-txt">
										if you have an account? <a href="javascript:;" class="login-click">login</a>
									</div>
								</div>
							</div>
						</div>
						<!-- signup slide end -->
						<!-- forgot password slide start -->
						<div class="forgot-password-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Forgot Password</h3>
									<form>
										<label class="label">Enter your email address to reset your password</label>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Email">
											<div class="field-icon"><i class="ion-ios-email"></i></div>
										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Submit">
										</div>
									</form>
									<div class="sign-up-txt">
										if you remember your password? <a href="javascript:;" class="login-click">login</a>
									</div>
								</div>
							</div>
						</div>
						<!-- forgot password slide end -->
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="<?php echo base_url("assets")  ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets")?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets")?>/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets")?>/js/bootstrap.js"></script>
	<script src="<?php echo base_url("assets")?>/js/velocity.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets")?>/js/script.js"></script>
</body>
</html>