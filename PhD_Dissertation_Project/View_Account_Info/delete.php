<?php

$LOG_PATH = "C:\wamp64\www\PhD_Dissertation_Project\View_Account_Info\LOG";

$myfile = fopen($LOG_PATH."/log.txt", "w") or die("Unable to open log.txt");
//$myfile = fopen($LOG_PATH."/log.txt", "a") or die("Unable to open log.txt");

fwrite($myfile, "delete.php\n");

$data=$_GET['Customer_id_and_SSN'];
fwrite($myfile, "data = $data\n");

$data_2 = preg_split("/\,/",$data);

$Account_id = $data_2[0];
fwrite($myfile, "Account_id = $Account_id\n");

$SSN = $data_2[1];
fwrite($myfile, "SSN = $SSN\n");

include('config.php');

$sql = "DELETE FROM Account WHERE Account_id=".$Account_id." and SSN='".$SSN."'";

fwrite($myfile, "sql = $sql\n");

$mysqli->query($sql);

$url = "index.php?SSN=".$SSN;
header("refresh: 0; url = ".$url);

fclose($myfile);
?>