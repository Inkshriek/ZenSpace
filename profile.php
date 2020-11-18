<?php
    include("extern/database.php");
    
    if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace - Profile</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
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
                    <li><a href="medals.php">Medals</a></li>
                    <li id = "Selected">Profile</li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <br>
            <!--Profile shows basic account information from the server as well as some settings.-->
            <form class="panelwide" id="profile" action="extern/profilesave.php" method="post">
                <h2>Profile Details</h2>
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" value="<?php echo $_SESSION['user']; ?>" required><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" required><br>
                <br>
                <input type="submit" value="Save">
                <?php
                    if (isset($_GET['notif'])) {
                        switch ($_GET['notif']) {
                            case 1:
                                echo "Your profile details were updated!";
                            break;
                            case 2:
                                echo "Your username needs to be at least 6 characters long and your email needs to be a valid format.";
                            break;
                        }
                    }
                ?>
            </form>
            <br>
        </div>
    </div>
</div>
    </form>
</div>
        <div id="footer">
            <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
            <p>ZenSpace is Powered by PHP.</p>
        </div>
    </body>

</html>