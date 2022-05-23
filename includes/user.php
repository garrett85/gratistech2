<?php
require_once('init.php');

class User
{
	private $userID;
	private $emailUsername;
	private $password;
	private $favorites;

	function __construct($inputUserEmail, $inputPassword)
	{
		// $sqlUsers = "SELECT * from users WHERE email=$inputUserEmail";
		// $queryUser = $connection->query($sqlUsers);
		// $user = $queryUser->fetch_assoc();

		$this->userID = $user['userID'];
		$this->emailUsername = $user['email'];
		$this->password = $user['password'];
		$this->favorites = $user['favorites'];

	}

	public function get_user_id()
	{
		return $this->userID;
	}

	public function get_emailUsername()
	{
		return $this->$emailUsername;
	}

	public function get_password()
	{
		return $this->password;
	}

	public function get_favorites()
	{
		return $this->favorites;
	}

}


?>
