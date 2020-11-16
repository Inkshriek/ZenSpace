<?php
    include("extern/database.php");
    
    // if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    //     header("Location: index.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Today</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <h1>ZenSpace</h1>
            <img src = "img/Logo.png" style="width:200px;height:200px;" alt = "logo of zenspace"></img>
            <ul id="nav">
                <li><a href="index.php">Today</a></li>
                <li><a href="guides.php">Guides</a></li>
                <li><a href="journals.php">Journals</a></li>
                <li><a href="medals.php">Medals</a></li>
                <li>Profile</li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
        <div id="root">
            <br>
            <!--Profile shows basic account information from the server as well as some settings.-->
            <form class="panelwide" id="profile" action="/profilesave.php">
                <h2>Profile Details</h2>
                <label for="username">Username: </label><input type="text" id="username" name="username" value="User" required><br>
                <label for="email">Email: </label><input type="text" id="email" name="email" value="something@gmail.com" required><br>
                <label for="location">Location: </label><input type="text" id="location" name="location" value="United States"><br>
                <input type="checkbox" id="privatetoggle" name="privatetoggle"><label for="privatetoggle"> Make Private</label><br>
                <a href="javascript:alert('This would bring up another window for changing the password.');">Change Password</a><br>
                <br>
                <input type="checkbox" id="soundtoggle" name="soundtoggle"><label for="soundtoggle"> Sound Effects</label><br>
                <input type="checkbox" id="tipstoggle" name="tipstoggle"><label for="tipstoggle"> Motivational Tips</label><br>
                <input type="checkbox" id="notifstoggle" name="notifstoggle"><label for="notifstoggle"> Notifications</label><br>
                <br>
                <input type="submit" value="Save">
            </form>
            <br>
        </div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
        </div>
    </body>

</html>