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
        <script>
            
            function toggleCheckIn() {

                var x = document.getElementById("checkinoverlay");
                if (x.style.display === "none") {
                    x.style.display = "block";
                    scroll(0,0);
                } else {
                    x.style.display = "none";
                }
            }

        </script>

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

            <form id="checkinoverlay" action="extern/addjournal.php" method="post" style="display: 
            <?php
                if (isset($_GET["checkin"]) && $_GET["checkin"] == true) {
                    echo "block";
                }
                else {
                    echo "none";
                }
                
            ?>;">
                <h2>Check-In</h2> 
                <textarea style="resize:none" rows="5" cols="60" id="checkintext" name="checkintext" placeholder="How are you feeling today?" required></textarea>
                <br>
                <input type="date" id="checkindate" name="checkindate" placeholder="Select Journal Date" required>
                <br>
                <div>If a journal already exists at the specified date, it will be updated.</div>
                <br>
                <input type="submit" value="Finish">
                <button onclick="toggleCheckIn()">Cancel</button>
            </form>


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
                <button onclick='toggleCheckIn()'>Add/Edit Journal</button>
                <ul class="journallist">
                    <!--Journals will populate this list when read from the server.-->
                    <?php
                        $path = "journals/" . $_SESSION["id"] . "/";
                        $print = [];
                        $printcount = 0;

                        if(!is_dir($path)){
                            //Directory does not exist, so lets create it.
                            mkdir($path, 0755);
                        }
                        if ($handle = opendir($path)) {
                            while (false !== ($file = readdir($handle))) {
                                if ('.' === $file) continue;
                                if ('..' === $file) continue;
                        
                                $json = file_get_contents($path . $file);
                                $array = json_decode($json, true);
                                
                                array_push($print, "
                                    <li class='journalentry'>
                                        <h3>" . $array['date'] . "</h3>
                                        <p>" . $array['text'] . "</p>
                                        <a href='extern/deletejournal.php?date=" .$array['date']. "');'>Delete Journal</a>
                                    </li>
                                ");
                                $printcount += 1;
                            }
                            closedir($handle);
                        }
                        for ($i = $printcount - 1; $i >= 0; $i -= 1) {
                            echo $print[$i];
                        }
                    ?>
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