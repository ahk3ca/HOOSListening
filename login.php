

<?php
	include 'config.php';
	if (session_id() == "")
		session_start();

	if(isset($_SESSION['isLogged']))
		if($_SESSION['isLogged']) {
			    header('Location: index.php');
		}

	if( isset($_POST['Submit'])) {
	    $email = $_POST['email'];
	    $password = $_POST['password'];
	    $getuser = pg_query($db_connection, "SELECT * FROM \"Users\" where email='$email'");
		$getrows = pg_affected_rows($getuser);

	    if($getrows < 1){
			$txt = "<center><br><br><h3>We didn't find an account. Please sign up. </h3></center>";
	        echo  $txt ;
	    }
	    $query_password = "SELECT password FROM \"Users\" where email='$email'";
	    $passwordResult = pg_query($db_connection, $query_password);
	    $row = pg_fetch_row($passwordResult);
	    $db_password = $row[0];

		    if($db_password == $password) {
		    		$_SESSION['isLogged'] = true;
		    		$query_name = "SELECT fname FROM \"Users\" where email='$email'";
		    		$nameResult = pg_query($db_connection, $query_name);
		    		$row = pg_fetch_row($nameResult);
		    		$db_firstname = $row[0];
		    		$_SESSION['name'] = $db_firstname;

		    		header('Location: index.php');

		    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" id ="login" action="login.php" method = "POST">
					<span class="login100-form-title p-b-43">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="email">
						<span class="label-input100">email</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" input type="Submit" name="Submit" value="Submit">
>
							Sign in
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Forgot password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>