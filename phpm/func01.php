<?php

include "status.inc.php";

/*
user_ip = $_SERVER['REMOTE_ADDR']; 

function echo_ip()
{
	
	echo "YOUR IP ADDRESS IS".$user_ip;
}

echo_ip();
*/

$string = "This is a new string";

$string_wc=str_word_count($string,2);

//echo $string_wc;

print_r($string_wc);

$str01 = "not that one again .";

$string_wc=str_word_count($str01,1,'.');

print_r($string_wc);

?>