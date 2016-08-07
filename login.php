<?php
	include("serverCode/connect.php");
	session_start();
	$error='';
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		
		$myusername = mysqli_real_escape_string($mysqli,$_POST['username']);
		$mypassword = mysqli_real_escape_string($mysqli,$_POST['password']); 
		
		$sql = "SELECT id FROM members WHERE username = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		// $active = $row['active'];
		
		$count = mysqli_num_rows($result);
		
		// If result matched $myusername and $mypassword, table row must be 1 row
		
		if($count == 1) {
			// $_SESSION("myusername");
			$_SESSION['login_user'] = $myusername;
			
			header("location: videostream.php");
			}else {
			$error = "Your Login Name or Password is invalid";
		}
	}
?>
<html>
	
	<head>
		<title>Login Page</title>
		
		<meta charset='utf-8'>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/desktop.css" rel="stylesheet">
		
	</head>
	
	<body>
		
		<div class="row">
			
			<div class="login">
				
				<form action = "" method = "post">
					<div class="form-group">
						<input type = "text" name = "username" placeholder="Username"class = "form-control"/>
					</div>
					<div class="form-group">
						<input type = "password" name = "password" placeholder="Password" class = "form-control" />
					</div>
					<div class="form-group">
						<input type = "submit" value = " Submit "  class = "btn btn-primary"/>
					</div>
									
					
				</form>
				<p class="text-danger"><?php echo $error; ?></p>
				
			</div>
		</div>
	</body>
</html>