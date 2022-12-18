<?php 
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register page</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/4d169062df/UntitledProject/style-svg.css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<script defer src="https://i.icomoon.io/public/temp/4d169062df/UntitledProject/svgxuse.js"></script>
	<script src="https://kit.fontawesome.com/d1d51d378c.js" crossorigin="anonymous"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">
<form action="login_db.php" method="post">
         <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
        <?php include('errors.php');?>
		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">

						<!-- Advanced login -->
						<form action="index.html">
							<div class="panel panel-body login-form">
								<div class="text-center">
									<h5 class="content-group">Sign in<small class="display-block">All fields are required</small></h5>
								</div>

								<div class="content-divider text-muted form-group"><span>Your credentials</span></div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="text" name="email" class="form-control" placeholder="Email Address">
									<div class="form-control-feedback">
										<i class="icon icon-user"></i>
									</div>
								</div>

								<div class="form-group has-feedback has-feedback-left">
									<input type="password" name="password" class="form-control" placeholder="Password">
									<div class="form-control-feedback">
										<i class="icon icon-key"></i>
									</div>
								</div>

								<!-- <div class="form-group has-feedback has-feedback-left">
									<input type="email" name="email" class="form-control" placeholder="Your email">
									<div class="form-control-feedback">
										<i class="fa-solid fa-at"></i>
									</div>
								</div> -->

								<button type="submit" name="login_user" class="btn bg-pink-400 btn-block btn-lg"> Confirm <i class="fa-sharp fa-solid fa-hand-point-right"></i></button>
								<br>
								<p>Not a member yet? <a href="login_registration.php">Sign Up</a></p>
							</div>
						</form>
						<!-- /advanced login -->


						<!-- Footer -->
						<!-- <div class="footer text-muted text-center">
							&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
						</div> -->
						<!-- /footer -->

					</div>
					<!-- /content area -->

				</div>
				<!-- /main content -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->
	</form>
</body>
</html>
