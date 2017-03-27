<?php 

	// Get values passe from form in loging.php file
	$username = $_POST["user"];
	$email = $_POST["email"];
	$password = password_hash($_POST["pass"], PASSWORD_DEFAULT);

	//connect to database
	$connect = new PDO("mysql:host=localhost;dbname=degokkers", "root", "");

	// put users information into database
	$sql = $connect->query("INSERT INTO tbl_users(username, email, password)"
	."VALUES ('$username', '$email', '$password')");

	// send user back to index page
	header("location: index.php");
