<?php 

	// Get values passe from form in loging.php file
	$username = $_POST["user"];
	$email = $_POST["email"];
	$password = $_POST["pass"];

	// to prevent mysql injection

	//connect to database
	$connect = mysqli_connect("localhost", "root", "");
	mysqli_select_db($connect, "register");

	// querry the database for user
	$sql = "INSERT INTO users(username, email, password)"
	."VALUES ('$username', '$email', '$password')";
	mysqli_query($connect, $sql);

header("location: index.php");