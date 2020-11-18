<?php
    include("database.php");

    $notif = 0;
    if (isset($_POST["username"]) && isset($_POST["email"])) {
        $user = $_POST["username"];
        $email = $_POST["email"];
        
        $sql = "SELECT userID FROM Users WHERE userID='". $_SESSION['id'] ."'";
        $result = mysqli_query($connection, $sql);
        if ($result && filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($user) >= 6) {

            $sql = "UPDATE Users SET username = '" . $user . "', email = '" . $email . "' WHERE userID=". $_SESSION['id'] ."";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                $notif = 1;
                $_SESSION["user"] = $_POST["username"];
                $_SESSION["email"] = $_POST["email"];
            }
        }
        else {
            $notif = 2;
        }
    }

    header("Location: ../profile.php?notif=" . $notif);
?>