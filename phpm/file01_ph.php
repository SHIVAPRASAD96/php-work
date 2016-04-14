<?php

$fp = fopen("Webdic.txt",r) or die("Unable to open");

#echo fread($fp,filesize("Webdic.txt"));
echo fgets($fp);

fclose($fp);
?>