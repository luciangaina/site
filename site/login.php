<?php

	$username= $_POST["username"];
	$password= $_POST["password"];

	$db_server="localhost";
	$db_port="3306";
	$db_name="dt_database";
	$db_user="dt_database";
	$db_pass="dt_database";

	$con=mysqli_connect($db_server,$db_name,$db_pass);

	if(!$con)
	{
		die("Connection failed!" . mysqli_connect_error());
	}

	print "Connected successfully";

	mysqli_select_db($con, $db_name) or die(mysqli_connect_error());

	print "Database connected successfully";

	$q= sprintf("SELECT * FROM dt_users WHERE u_username = '%s' AND u_password = MD5('%s')", $username,$password);
	$res= mysqli_query($con,$q) or die(mysqli_error($con));

	if(mysqli_num_rows($res)>0)
	{
		print "User logged in";
	}
	else
	{
		print "User not logged in";
	}
?>