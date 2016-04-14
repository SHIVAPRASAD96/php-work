<?php


$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "test_database";

@mysqli_connect("$db_host","$db_username","$db_pass") or die("Could not connect to MySql");



echo "Successful Matching";

?>