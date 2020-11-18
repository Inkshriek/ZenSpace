<?php
    include("extern/database.php");
    
    // if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    //     header("Location: index.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Journals</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/journal.css">
    </head>
    <body>
        <script>
            
            function toggleCheckIn() {
                var x = document.getElementById("checkinoverlay");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }

        </script>

        <div id="header">
            <!--This should be shown at the top for mobile and at the side for desktop-->
            <h1>ZenSpace</h1>
        </div>
            <div id = "grid">
            <div class="sidebar">
                <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "logo of zenspace"/>
            <ul id="nav">
                <li><a href="index.php">Today</a></li>
                <li><a href="guides.php">Guides</a></li>
                <li id = "Selected">Journals</li>
                <li><a href="medals.php">Medals</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
        <div id="main">
            <form id="checkinoverlay" action="extern/addjournal.php" method="post" style="display: none;">
                <h2>Check-In</h2> 
                <input type="text" id="checkintitle" name="checkintitle" placeholder="Journal Title" required>
                <br>
                <textarea style="resize:none" rows="5" cols="60" id="checkintext" name="checkintext" placeholder="How are you feeling today?" required></textarea>
                <br>
                <input type="date" name="checkindate" placeholder="Select Journal Date" required>
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
                <button onclick='toggleCheckIn()'>Add Journal</button>
                <ul class="journallist">
                    <!--Journals will populate this list when read from the server.-->
                    <?php
                        $path = "journals/" . $_SESSION["id"] . "/";
                        $print = [];
                        $printcount = 0;

                        if ($handle = opendir($path)) {
                            while (false !== ($file = readdir($handle))) {
                                if ('.' === $file) continue;
                                if ('..' === $file) continue;
                        
                                $json = file_get_contents($path . $file);
                                $array = json_decode($json, true);
                                
                                array_push($print, "
                                    <li class='journalentry'>
                                        <h3>" . $array['title'] . "</h3>
                                        <div>" . $array['date'] . "</div>
                                        <p>" . $array['text'] . "</p>
                                        <div class='mood'>Mood Rating: 6/10</div>
                                        <a href='javascript:alert('This will let you edit the journal in its entirety.');'>Edit Journal</a>
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
                    </div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by React.</p>
        </div>
    </body>

</html>