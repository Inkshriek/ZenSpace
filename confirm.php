<?php
    include("extern/database.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>ZenSpace</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>

      <body>

        <div id=root>
            <div class="panelwide">
                <?php
                    if (isset($_GET["notif"])) {
                        if ($_GET["notif"] == 1) {
                            ?>
                            <p>Sign up was successful! You're now able to log in!</p>

                            <a href="login.php">Login Here</a>
                            <?php
                        }
                    }
                    else {
                        header("Location: ../index.php");
                    }
                ?>

            </div>
        </div>
      </body>

</html>
