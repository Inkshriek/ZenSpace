<?php
	include("extern/database.php");

	if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Sign Up</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
        <div id="root">

			<form class="panel" id="middle" action="extern/signup.php" method="post">
				<h1>Sign Up</h1>
				<label for="username">Username</label><br>
				<input type="text" name="username" class="field" maxlength="25" required><br><br>
				<label for="password">Password</label><br>
				<input type="password" name="password" class="field" maxlength="25" required><br><br>
				<label for="email">Email Address</label><br>
				<input type="text" name="email" class="field" maxlength="50" required><br><br>
				<br>
				<?php
					if (isset($_GET["notif"])) {
						if ($_GET["notif"] == 1) {
							echo "<div class='center'>There seems to have been a problem with registering your account. Please try again later.</div>";
						}
						else if ($_GET["notif"] == 2) {
							echo "<div class='center'>That username already exists! Please try a different one.</div>";
						}
						else if ($_GET["notif"] == 3) {
							echo "<div class='center'>Please ensure your email is valid, and your username and password are at least 6 characters.</div>";
						}
					}
				?>
				<input type="submit" class="submit" value="Sign Up">
			</form>

        </div>
    </body>

</html>