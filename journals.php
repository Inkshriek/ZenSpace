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
        <link rel="stylesheet" type="text/css" href="main.css" >
    </head>
    <body>
        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <h1>ZenSpace</h1>
            <div class="wrapper">
            <div class="sidebar">
            <ul id="nav">
                <img src = "img/Logo.png" style="width:200px;height:200px;" alt = "logo of zenspace"></img>
                <li><a href="index.php">Today</a></li>
                <li><a href="guides.php">Guides</a></li>
                <li id = "Selected">Journals</li>
                <li><a href="medals.php">Medals</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
        <div id="root">
            <br>
            <!--Journals are displayed each with their contents folded, unfolding if clicked to show them.-->
            <!--They're organized in a chronological list, the most recent shown first.-->
            <form class="panelwide" id="search" action="/search.php">
                <input type="text" id="searchtext" name="searchtext" size="30" placeholder="Search Guides, Tasks, Journals, etc." required>
                <input type="submit" value="Search">
            </form>
            <br>
            <div class="panelwide" id="journals">
                <h2>Journals</h2>
                <a href="javascript:alert('This would bring up a prompt for making a journal.');">Add New Journal</a>
                <ul class="journallist">
                    <!--Journals will populate this list when read from the server.-->
                    <li>
                        <div class="journalentry">
                            <h3>Sample Journal</h3>
                            <div>Date: 10/17/2020</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis tellus ac nisl dictum suscipit id vel tellus. Mauris vestibulum euismod massa ac sagittis. Donec sit amet orci a mauris elementum aliquam. Praesent fringilla hendrerit aliquet. Proin tempor laoreet ligula at aliquam. Curabitur volutpat elit nec ex dictum finibus quis et erat. Sed eu molestie urna.</p>
                            <div class="mood">Mood Rating: 6/10</div>
                            <a href="javascript:alert('This'll let you edit the journal in its entirety.');">Edit Journal</a>
                        </div>
                    </li>
                    <li>
                        <div class="journalentry">
                            <h3>Sample Journal</h3>
                            <div>Date: 10/21/2020</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis tellus ac nisl dictum suscipit id vel tellus. Mauris vestibulum euismod massa ac sagittis. Donec sit amet orci a mauris elementum aliquam. Praesent fringilla hendrerit aliquet. Proin tempor laoreet ligula at aliquam. Curabitur volutpat elit nec ex dictum finibus quis et erat. Sed eu molestie urna.</p>
                            <div class="mood">Mood Rating: 9/10</div>
                            <a href="javascript:alert('This'll let you edit the journal in its entirety.');">Edit Journal</a>
                        </div>
                    </li>
                </ul>
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