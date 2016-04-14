<?php
$str01 = "hello world and & you are awesome.";

$str_wc1 = str_word_count($str01,1,"&.");

//str_word_count("","",//here the mention special symbols to be counted as words);

print_r($str_wc1); 
echo "\n";
$str02 = "hello world and & you are awesome .";
$str_wc2 = str_word_count($str02,1,"&.");
print_r($str_wc2);

$string_shu = str_shuffle($str01);

echo $string_shu;

$half = substr($string_shu,0,5);

echo "next ".$half;
?>