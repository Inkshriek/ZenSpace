<?php
	include("extern/database.php");

	$_SESSION["loggedin"] = false;
	$_SESSION["user"] = "";
	$_SESSION["id"] = 0;
	$_SESSION["email"] = "";

	header("Location: index.php");
?>
