<?php
    include("database.php");

    if (!isset($connection) || !$connection) {
		die("Journals can't be added without a database connection. Unfortunately. Please try again later.");
	}

    if (isset($_POST["checkintext"]) && isset($_POST["checkindate"])) {
        $text = $_POST["checkintext"];
        $date = $_POST["checkindate"];
        //$mood = $_POST["checkinmood"];
        $journal = new \stdClass();
        $journal->text = $text;
        $journal->date = $date;
        //$journal->mood = $mood;

        $json = json_encode($journal);
        if (json_decode($json) != null) {
            $dir = "../journals/" . $_SESSION["id"];
            if(!is_dir($dir)){
                mkdir($dir, 0755);
            }
            $file = fopen($dir . "/journal+" . $date . ".json","w+");
            fwrite($file, $json);
            fclose($file);
        }
    }
    else {
        echo "Why are you here";
    }

    header("Location: ../journals.php");
?>