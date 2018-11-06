<?php

	session_start();

	$username= $_POST["username"];
	$password= $_POST["password"];

	include_once('db_properties.php');

	$con=mysqli_connect($db_server,$db_name,$db_pass);

	if(!$con)
	{
		die("Connection failed!" . mysqli_connect_error());
	}

	/*print "Connected successfully";*/

	mysqli_select_db($con, $db_name) or die(mysqli_connect_error());

	/*print "Database connected successfully";*/

	$q= sprintf("SELECT * FROM dt_users WHERE u_username = '%s' AND u_password = MD5('%s')", $username,$password);
	$res= mysqli_query($con,$q) or die(mysqli_error($con));
?>

<html>
	<?php
		if(mysqli_num_rows($res)>0)
		{
			$_SESSION['user']=$username;
			header('location:home_ro.php');
		}
		else
		{?>
			<head>
				<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
				<title>Doina Timișului</title>
				<link rel="Icon" type="image/png" href="img/dt.png" />
			
				<link href="css/style.css" rel="stylesheet" />
			</head>
			<body class="body-index">
				<div class="center-insert">
					<h1>User not logged in</h1>
				</div>	
			</body>
		<?php } ?>
</html>