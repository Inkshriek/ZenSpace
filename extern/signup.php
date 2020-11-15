<?php
	include("database.php");

	if (!isset($connection) || !$connection) {
		die("Signing up cannot be done without a database connection, please try again later.");
	}

	$notif = 0;
	if (isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["email"])) {
		$email = $_POST["email"];
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($user) >= 6 && strlen($pass) >= 6) {
			$sql = "SELECT username FROM Users WHERE username='". $user ."'";
			$result = mysqli_query($connection, $sql);
			if (mysqli_num_rows($result) == 0) {
				$pass = password_hash($pass, PASSWORD_DEFAULT);
				$sql = "INSERT INTO Users (username, password, email)
				VALUES ('" . $user . "', '" . $pass . "', '" . $email . "')";
				$result = mysqli_query($connection, $sql);

				if ($result) {
					header("Location: ../confirm.php?notif=" . 2);
					exit();
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

	header("Location: ../signup.php?notif=" . $notif);
?>
