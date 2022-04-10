<?php
	function login($connection, $username, $password)
	{
		$user = "SELECT * FROM Users WHERE username = '$username'";
		$query = mysqli_query($connection, $user);
		return $query;
	}
?>
