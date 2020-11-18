<?php
    include("extern/database.php");
    
    if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
        header("Location: index.php");
    }
?>

<<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Medals</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/medals.css">
    </head>

    <body>
        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <div class="sidebar">
                <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "logo of zenspace"/>
                <ul id="nav">
                    <li><a href="index.php">Today</a></li>
                    <li><a href="guides.php">Guides</a></li>
                    <li><a href="journals.php">Journals</a></li>
                    <li id = "Selected">Medals</li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <div id="main">
            <br>
            <!--Medals are achievements showing your progress! You can also make custom ones.-->
            <!--They're displayed as pretty pictures that start grayed with a progress measurement, then gain color when accomplished.-->
            <form class="panelwide" id="search" action="/search.php">
                <input type="text" id="searchtext" name="searchtext" size="30" placeholder="Search Guides, Tasks, Journals, etc." required>
                <input type="submit" value="Search">
            </form>
            <br>
            <div class="panelwide" id="medals">
                <h2>Medals</h2>
                <ul class="medalslist">
                    <li class="medal">
                        <h4>Join ZenSpace</h4>
                        <img src="img/joinedbadge.png" style="width:150px;height:150px;" alt="Medal Image">
                        <div>Completed!</div>
                    </li>
                    <li class="medal">
                        <h4>Shared ZenSpace with a Friend</h4>
                        <img src="img/sharedbadge.png" style="width:150px;height:150px;" alt="Medal Image">
                        <div>Completed!</div>
                    </li>
                    <li class="medal">
                        <h4>First Guide</h4>
                        <img src="img/guidebadge.png" style="width:150px;height:150px;" alt="Medal Image">
                        <div>Completed!</div>
                    </li>
                    <li class="medal">
                        <h4>First Journal</h4>
                        <img src="img/journalbadge.png" style="width:150px;height:150px;" alt="Medal Image">
                        <div>Completed!</div>
                    </li>
                    <li class="medal">
                        <h4>First Check-In</h4>
                        <img src="img/checkinbadge.png" style="width:150px;height:150px;" alt="Medal Image">
                        <div>Completed!</div>
                    </li>
                </ul>
                <a href="javascript:alert('This'll give you a prompt for making your own medal.');">Add Custom Medal</a>
            </div>
            <br>
        </div>
    </div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
        </div>
    </body>

</html>