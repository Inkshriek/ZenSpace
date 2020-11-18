<?php
    include("database.php");

    if (!isset($connection) || !$connection) {
		die("Journals can't be added without a database connection. Unfortunately. Please try again later.");
	}

    if (isset($_POST["checkintitle"]) && isset($_POST["checkintext"]) && isset($_POST["checkindate"])) {
        $title = $_POST["checkintitle"];
        $text = $_POST["checkintext"];
        $date = $_POST["checkindate"];
        //$mood = $_POST["checkinmood"];
        $journal = new \stdClass();
        $journal->title = $title;
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
        echo "Your journal has been added/updated for " . $date . "! <br>";
        echo $json;
        echo "<br> <a href='../journals.php'>Return to Journals</a>";
    }
    else {
        echo "Why are you here";
    }
?>