<?php


require('config.php');

$LOG_PATH = "C:\wamp64\www\PhD_Dissertation_Project\View_Customer_Info\LOG";

$myfile = fopen($LOG_PATH."/log.txt", "w") or die("Unable to open log.txt");
//$myfile = fopen($LOG_PATH."/log.txt", "a") or die("Unable to open log.txt");

fwrite($myfile, "update.php\n");

if(isset($_POST)){

	$sql = "UPDATE Customer SET ".$_POST['name']."='".$_POST['value']."' WHERE Customer_id=".$_POST['pk'];

	fwrite($myfile, "sql = $sql\n");

	$mysqli->query($sql);
	echo 'Updated successfully.';
}

fclose($myfile);
?>