<?php
    include("extern/database.php");
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

    <?php
		if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
	?>

    <!--This displays when you're logged in. Essentially the important stuff.-->
    <body>

        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <h1>ZenSpace</h1>
            <div class="wrapper">
            <div class="sidebar">
            <ul id="nav">
              <img src = "img/Logo.png" style="width:200px;height:200px;" alt = "logo of zenspace"></img>
              <br><br>
                <li id = "Selected">Today</li>
                <li><a href="guides.php">Guides</a></li>
                <li><a href="journals.php">Journals</a></li>
                <li><a href="medals.php">Medals</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>

        <div id="root">
            <br>
            <!--Each feature is displayed in panels, with two columns for desktop and one column for mobile-->
            <form class="panelwide" id="search" action="/search.php">
                <input type="text" id="searchtext" name="searchtext" size="30" placeholder="Search Guides, Tasks, Journals, etc." required>
                <input type="submit" value="Search">
            </form>
            <br>
            <div class="panel" id="controls">
                <div id="focusmode">
                    <a href="javascript:alert('This'll bring up controls and enable some functions for focusing.');">Focus Mode</a>
                </div>
                <div id="user">
                    <a href="javascript:alert('This'll bring up quick actions related to user preferences.');">User's Name</a>
                </div>
            </div>
            <br>
            <div class="panel" id="greeting">
                <h2>Good Morning, User!</h2>
                <div id="checkin">
                    Would you like to talk about your day today?
                    <a href="journals.php?checkin=true">Check-In</a>
                </div>
            </div>
            <br>
            <div class="panel" id="tasks">
                <h2>Today's Tasks</h2>
                <div id="taskslist">
                    <ul>
                        <li><input type="checkbox" id="task1"><label for="task1"> Task 1</label> - <a href="javascript:alert('This'll edit the task, of course.');">Edit</a></li>
                        <li><input type="checkbox" id="task2"><label for="task2"> Task 2</label> - <a href="javascript:alert('This'll edit the task, of course.');">Edit</a></li>
                        <li><input type="checkbox" id="task3"><label for="task3"> Task 3</label> - <a href="javascript:alert('This'll edit the task, of course.');">Edit</a></li>
                    </ul>
                </div>
                <form id="tasksadd" action="/addtask.php">
                    <input type="text" id="searchtext" name="searchtext" placeholder="Task Name" required>
                    <input type="submit" value="Add New Task">
                </form>
            </div>
            <br>
            <div class="panel" id="dailyhelp">
                <h2>Tip of the Day</h2>
                <div id="dailyhelptip">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu nibh a augue semper faucibus nec in magna.
                </div>
                <div id="dailyhelpimage">
                    <img src="" alt="Tip Image">
                </div>
            </div>
            <br>
        </div>

        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
        </div>
      </div>
      <br />
    </div>
    </div>
    <div id="footer">
      <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
      <p>ZenSpace is Powered by React.</p>
    </div>
  </div>
</div>

    </body>

    <?php
        } else {
    ?>

    <!--This displays when you're not logged in.-->
    <body>
        
    </body>

    <?php
        }
    ?>

</html>