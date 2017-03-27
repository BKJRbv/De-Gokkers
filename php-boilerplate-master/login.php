<?php 
	session_start();
	// Get values passe from form in loging.php file
	$username = $_POST["user"];
	$pass = $_POST['pass'];

	//connect to database
	$connect = new PDO("mysql:host=localhost;dbname=degokkers", "root", "");


	// querry the database for user
	$result = $connect->query("select * from tbl_users where username = '".$username."'")
	or die("Failed to query database " .$connect->errorInfo()[2]);


	// show login failed/granted when butten pressed
	$row = $result->fetch();
	if(password_verify($pass, $row["password"]))
	{
		$_SESSION["logged_in"] = true;
		header("location: index.php");
	}
	else
	{
		$_SESSION["logged_in"] = false;
	}

header("location: index.php");