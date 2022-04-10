<?php
	if (isset($_REQUEST['login']))
	{
		$result = login($connection, $username, $password);

		foreach($result as $row)
		{
			$check = password_verify($password, $row['password']);

			if ($check)
			{
				$_SESSION['username'] = $row['username'];
			}
		}
	}
?>
