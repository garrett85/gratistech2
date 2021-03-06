<?php
require_once('includes/init.php');
require_once('header.php');

?>

<!doctype html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
	<?php
	if(!isset($_SESSION['loginAttempts'])) { $_SESSION['loginAttempts'] = 0; }
	if($_SESSION['loginAttempts'] > 0){
		echo "Invalid Login, please try again";
	}
	?>
	<form method='post' action='process-login.php'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

<?php
include('footer.php');
?>
</html>
