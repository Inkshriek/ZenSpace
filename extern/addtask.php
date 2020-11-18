<?php
    include("database.php");

    if (isset($_GET["content"])) {
        $content = $_GET["content"];

        $sql = "INSERT INTO Tasks (checked, content, userID)
            VALUES ('" . 0 . "', '" . $content . "', '" . $_SESSION['id'] . "')";
        mysqli_query($connection, $sql);
    }
    
    header("Location: ../index.php");
?>