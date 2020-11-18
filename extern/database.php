<?php
    session_start();

    if (!isset($_SESSION["loggedin"])) {
        $_SESSION["loggedin"] = false;
    }
    if (!isset($_SESSION["user"])) {
        $_SESSION["user"] = "";
    }
    if (!isset($_SESSION["id"])) {
        $_SESSION["id"] = 0;
    }
    if (!isset($_SESSION["email"])) {
        $_SESSION["email"] = "";
    }

    $connection = mysqli_connect("localhost", "root", "", "userdata");
    if (!$connection) {
        echo "<script type='text/javascript'>console.log('The database connection could not be established. As a result, most features may not work.');</script>";
    }

?>
