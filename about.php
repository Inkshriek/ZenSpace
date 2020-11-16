<?php
	include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - About</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

    <body>
        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <h1>ZenSpace</h1>
            <div class="wrapper">
            <div class="sidebar">
            <ul id="nav">
                <img src = "img/Logo.png" style="width:200px;height:200px;" alt = "logo of zenspace"></img>
                <br><br>
                <li><a href="index.php">Today</a></li>
                <li><a href="guides.php">Guides</a></li>
                <li><a href="journals.php">Journals</a></li>
                <li><a href="medals.php">Medals</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li id = "Selected"> About Us</li>
</ul>    
</div>
        <div id="main">
            <br>
            <div class="panelwide" id="about">
                <h2>What We Do</h2>
                <p>ZenSpace is here to help students and many people around the world deal with their stress.
                    COVID-19 led us to innovate and to implement services for your benefit. We make sure to help
                    you along your journey and provide insightful videos and tips for you to succeed.</p>
                <h2>Who We Are</h2>
                <p>ZenSpace is a website created to make the lives of students 
                    and adults who feel stressed during coronavirus to get help 
                    they deserve and support. Coronavirus has impacted millions 
                    of families that were not given ample time or advice to deal 
                    with the sudden change in lifestyle. ZenSpace was created to 
                    aid you and guide you during these stressful times. We wanted 
                    to create something that makes you feel connected and that you 
                    can rely on for reducing your stress and improving your mood. 
                    We dedicate all the services on the website to you to make your 
                    life easier even when you are lost. If you feel a need to contact us personally message us through here.</p>
            </div>
            <br>
            <form class="panelwide" id="email" action="/contact.php">
                <h2>Email Us!</h2>
                <input type="text" id="emailtitle" name="emailtitle" placeholder="Title" required>
                <br>
                <textarea style="resize:none" rows="5" cols="60" name="emailtext" placeholder="Message" required></textarea>
                <br><br>
                <input type="submit" value="Send Email">
            </form>
            <br>
            <div class="panelwide" id="contact">
                <h2>Contact Information</h2>
                <ul>
                    <li>4000 Central Florida Blvd</li>
                    <li>Orlando, Florida</li>
                    <li>32816</li>
                    <li>(407) 823-2000</li>
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