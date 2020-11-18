<?php
    include("database.php");

    if (isset($_GET["date"])) {
        $date = $_GET["date"];
        $path = "../journals/" . $_SESSION["id"] . "/journal+" . $date . ".json";
        if (!unlink($path)) {  
            echo "Journal cannot be deleted. It appears to not exist in the first place.";  
        }  
        else {  
            echo "Journal has been deleted!";
        }  
    }

    header("Location: ../journals.php");
?>
