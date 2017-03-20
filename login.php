<?php 
	// Get values passe from form in loging.php file
	$username = $_POST["user"];
	$pass = $_POST['pass'];

	$password = password_hash($pass, PASSWORD_DEFAULT);
	// to prevent mysql injection

	//connect to database
	$connect = mysqli_connect("localhost", "root", "");
	mysqli_select_db($connect, "register");

	// querry the database for user
	$result = mysqli_query($connect, "select * from users where username = '".$username."' and password = '".$password."'")
	or die("Failed to query database ".mysqli_error($connect));

	$row = mysqli_fetch_array($result);
	if($row["username"] == $username && $row["password"] == $password)
	{
		$message = urlencode("Ingelogd als $username");
		header("location: index.php?message=" . $message);
	}
	else
	{
		die("Failed to login");
	}

