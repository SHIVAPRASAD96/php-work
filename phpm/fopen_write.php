<?php

$fp= fopen("Test.txt",w) or die("Sorry Couldnt open the file soo dieing");

$txt ="madha mohan malwaia\n";
fwrite($fp,$txt);
$txt = "Sherlock Holmes\n";
fwrite($fp,$txt);

fclose($fp);

?>