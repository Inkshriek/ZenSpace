<?php
	session_start();

	if (!isset($_SESSION["loggedin"])) {
  		$_SESSION["loggedin"] = false;
	}
	if (!isset($_SESSION["name"])) {
		$_SESSION["name"] = "";
	}
	if (!isset($_SESSION["id"])) {
		$_SESSION["id"] = 0;
	}

	$connection = mysqli_connect("localhost", "root", "", "userlist");
	if (!$connection) {
		echo "<script type='text/javascript'>console.log('The database connection could not be established. As a result, most features may not work.');</script>";
	}

	function goback() {
		header("Location: {$_SERVER['HTTP_REFERER']}");
		exit;
	}

?>
