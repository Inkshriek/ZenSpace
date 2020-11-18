<?php
    include("database.php");

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $check = 0;

        $sql = "SELECT checked, userID FROM Tasks WHERE id=". $id ."";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userID'] != $_SESSION['id']) {
                die("Why are you here");
            }
            $checked = $row['checked'];
            if ($checked == 1) {
                $checked = 0;
            }
            else {
                $checked = 1;
            }
            $sql = "UPDATE Tasks SET checked = '" . $checked . "' WHERE id=". $id ."";
            mysqli_query($connection, $sql);
        }
    }
    
    header("Location: ../index.php");
?>