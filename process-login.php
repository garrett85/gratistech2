<?php
require_once('includes/init.php');


$userEmail = $_POST['email'];
$userPass  = $_POST['password'];

// query database for user
$sqlUsers = "SELECT * FROM users WHERE email='$userEmail'";
$queryUsers = $connection->query($sqlUsers);
$fetchUser = $queryUsers->fetch_assoc();

// check username & password against database
if($userEmail == $fetchUser['email'] && $userPass == $fetchUser['password'])
{
		$_SESSION['userSignedIn'] = $userEmail;
		echo $_SESSION['userSignedIn'];
		header("Location: index.php");
		exit;
}

else
{
	//echo "Incorrect login email and or password";
	$_SESSION['loginAttempts']++;
	header("Location: ./login.php");
	exit;
}
?>
