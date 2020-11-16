<?php
    include("database.php");

    if (!isset($connection) || !$connection) {
		die("Journals can't be added without a database connection. Unfortunately. Please try again later.");
	}

    if (isset($_POST["checkintext"])) {
        $title = $_POST["checkintitle"];
        $text = $_POST["checkintext"];
        //$mood = $_POST["checkinmood"];
        $journal = new \stdClass();
        $journal->title = $title;
        $journal->text = $text;
        //$journal->mood = $mood;

        $json = json_encode($journal);
        if (json_decode($json) != null) {
            $file = fopen("../journals/journal" . $_SESSION["id"] . "+" . date("Y-m-d") . ".json","w+");
            fwrite($file, $json);
            fclose($file);
        }
        echo "Your journal has been added/updated for " . date("m/d/Y") . "! <br>";
        echo $json;
        echo "<br> <a href='../journals.php'>Return to Journals</a>";
    }
?>