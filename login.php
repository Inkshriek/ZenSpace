<?php
	include("extern/database.php");
	
	if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Login</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <div id="root">

            <form class="panel" id="login" action="extern/login.php" method="post">
                <h1>Login</h1>
				<label for="username">Username</label>
				<input type="text" name="username" class="field" maxlength="25" required>
				<label for="password">Password</label>
				<input type="password" name="password" class="field" maxlength="25" required>
				<br>
				<?php
					if (isset($_GET["notif"])) {
						if ($_GET["notif"] == 1) {
							echo "<div class='center'>This password is incorrect! Please try again.</div>";
						}
						else if ($_GET["notif"] == 2) {
							echo "<div class='center'>This username doesn't seem to exist! Try another one, or signup if you haven't already.</div>";
						}
						else if ($_GET["notif"] == 3) {
							echo "<div class='center'>There was an issue fetching account information. Please try again later.</div>";
						}
					}
				?>
				<input type="submit" class="submit" value="Login">
            </form>

        </div>
    </body>

</html>