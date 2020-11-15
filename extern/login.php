<?php
	include("database.php");

	if (!isset($connection) || !$connection) {
		die("Logging in cannot be done without a database connection, please try again later.");
	}

	$notif = 0;
	if (isset($_POST["user"]) && isset($_POST["pass"])) {
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$sql = "SELECT userID, username, password FROM Users WHERE username='". $user ."'";
		$result = mysqli_query($connection, $sql);

		if ($result) {
			if (mysqli_num_rows($result) > 0) {
				$data = mysqli_fetch_assoc($result);
				if (password_verify($pass, $data["password"])) {
					$_SESSION["loggedin"] = true;
					$_SESSION["user"] = $user;
					$_SESSION["id"] = $data["userID"];
				}
				else {
					$notif = 1;
				}
			}
			else {
				$notif = 2;
			}
		}
		else {
			$notif = 3;
		}
	}

	header("Location: ../login.php?notif=" . $notif);
?>
