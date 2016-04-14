<?php

session_start();

//echo $_SESSION["username"];

if (isset($_SESSION["username"])&& isset($_SESSION["age"]))
{
	echo "Welcome,".$_SESSION["username"].$_SESSION["age"];
}
else
{
	echo "Variable not set";
}
?>