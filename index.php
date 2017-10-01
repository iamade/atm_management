<?php

require_once 'php_action/db_connect.php';

session_start();

if(isset($_SESSION['userId'])) {
	header('location: http://localhost:8090/atm_management/dashboard.php');
}

$errors = array();

if($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) || empty($password)) {
		if($username == "") {
			$errors[] = "Username is required";
		}

		if($password == "") {
			$errors[] = "Password is required";
		}

	}	else{
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = $connect->query($sql);

		if($result->num_rows == 1) {
			$password = ($password);
			//exist
			$mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$mainResult = $connect->query($mainSql);

			if($mainResult->num_rows == 1){
				$value = $mainResult->fetch_assoc();
				$user_id = $value['user_id'];

				// set seession
				$_SESSION['userId'] = $user_id;

			header('location: http://localhost:8090/atm_management/dashboard.php');
			} else{
				$errors[] = "Incorrect username/password combination";
			}

		}	else {
			$errors[] = "Username doesnot exists";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>atm vendor monitoring and payment System</title>
	<!-- bootstrap-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<!-- bootstrap theme-->
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
<!-- font awesome-->
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
<!-- custom css-->
<link rel="stylesheet" type="text/css" href="custom/css/custom.css">
<!-- jquery-->
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<!-- jqueryul-->
<link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
<script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
<!-- bootstrap js-->
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="vertical">
		<div class="col-md-5 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign In</h3>
				</div>
					 <div class="panel-body">

					 	<div class="messages">
					 		<?php if($errors) {
					 			foreach($errors as $key => $value) {
					 				echo '<div class="alert alert-warning role="alert">
											<i class="glyphicon glyphicon-exclamation-sign"></i>
											'.$value.' </div>';

					 			}
					 		}?>
					 	</div>

						 <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="loginForm">
						  <div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
						  </div>
						
						  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i> Submit </button>
						</form> 
		</div>
			</div>
				</div>
		<!-- col-md-5 -->
	</div>
	<!-- /row -->
</div>
<!-- /container -->

</body>
</html>

