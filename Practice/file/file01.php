<?php

$handle = fopen("names.txt", "a");

fwrite($handle,"\nHey maga");

fclose($handle);

echo "Written";
?>
