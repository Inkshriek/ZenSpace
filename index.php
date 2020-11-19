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

        <script>
            
            function updateTask(id) {
                location.replace("extern/checktask.php?id=" + id + "");
            }

            function deleteTask(id) {
                location.replace("extern/deletetask.php?id=" + id + "");
            }

        </script>


        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <div class="sidebar">
                <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "logo of zenspace"/>
                <ul id="nav">
                    <li id = "Selected">Today</li>
                    <li><a href="guides.php">Guides</a></li>
                    <li><a href="journals.php">Journals</a></li>
                    <li><a href="medals.php">Medals</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

        </div>
        <div id = "main">
            <div id="focusmode" style="display: none;">
                <div id="min"></div>:<div id="sec"></div>
                <button onclick="startTimer()">Start Pomodoro</button>
            </div>
            <br>
            <!--Each feature is displayed in panels, with two columns for desktop and one column for mobile-->
            <form class="panelwide" id="search" action="/search.php">
                <input type="text" id="searchtext" name="Searchtext" size="30" placeholder="Search Guides, Tasks, Journals, etc." required>
                <input type="submit" value="Search">
            </form>
            <br>
            <div id = "homegrid">
            <div class="panel" id="greeting">
                <h2>Good Morning, <?php echo $_SESSION["user"]; ?>!</h2>
                <div id="checkin">
                    Would you like to talk about your day today?
                    <a href="journals.php?checkin=true">Check-In</a>
                    <img src = "img/user.jpg" height = "200" width = "350" alt ="Picture of many people">
                </div>
            <div class="panel" id="tasks">
                <h2>Today's Tasks</h2>
                <ul id="taskslist">
                    <?php
                        $sql = "SELECT ID, checked, content FROM Tasks WHERE userID='" . $_SESSION['id'] . "'";
                        $result = mysqli_query($connection, $sql);
                        if ($result) {
                            $row;
                            while($row = mysqli_fetch_array($result)) {
                                if ($row['checked'] == 1) {
                                    echo "<li class='task'><input type='checkbox' onclick='updateTask(" . $row['ID'] . ")' checked>" . $row['content'] . "<button onclick='deleteTask( " . $row['ID'] . " )'>Delete</button> </li>";
                                }
                                else {
                                    echo "<li class='task'><input type='checkbox' onclick='updateTask(" . $row['ID'] . ")'>" . $row['content'] . "<button onclick='deleteTask( " . $row['ID'] . " )'>Delete</button> </li> ";
                                }
                                
                            }   
                        }
                        else {
                            echo "You don't have any tasks! Why not create one?";
                        }
                    ?>   
                </ul>
                <form id="tasksadd" action="extern/addtask.php" method="get">
                    <input type="text" id="content" name="content" placeholder="Task Name" required>
                    <input type="submit" value="Add New Task">
                </form>
            <br>
                    </div>
                    </div>
                <div class="panel" id="dailyhelp">
                <h2>Tip of the Day</h2>
                    <?php
                        $tip = [
                            "tip 1",
                            "tip 2",
                            "tip 3",
                            "tip 4",
                            "tip 5",
                            "tip 6",
                        ];
                        $rand = rand(0,5);
                        echo "<div id='dailyhelptip'>".$tip[$rand]."</div>";
                    ?>
                
            <div class = "grid2">
                <div id="dailyhelpimage">
                <img src="img/quote1.jpg" height = "200" width = "200" alt=" Tip Image">
                </div>
                <br>
                    </div>
                    </div>
                    </div>
                    </div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by PHP.</p>
        </div>
    </body>

    <?php
        } else {
    ?>

    <!--This displays when you're not logged in.-->
            <body>
        <a href="login.php">You're not logged in! Log in here.</a>
        <br>
        <a href="signup.php">Or, sign up first if you lack an account.</a>
        </body>

    <?php
        }
    ?>

</html>