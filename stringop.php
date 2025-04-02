<?php
$str="my name is sanika";
print("Original string=".$str);
print("<br>Number of words in string=".str_word_count($str));
print("<br>reverse string=".strrev($str));
print("<br>lower case string=".strtolower($str));
print("<br>upper case string=".strtoupper($str));
print("<br>Length of string=".strlen($str));
print("<br>substring=".substr($str,5));
print("<br>string at perticular position=".strpos($str,'y'));
print("<br>last occurance of char=".strrpos($str,'a'));
print("<br>replace string=".str_replace("sanika","anika",$str));
print("<br>convert first word as capital=".ucwords($str));
print("<br>compare strings=".strcmp("sanika","sujata"));
print("<br>repeate string=".str_repeat($str,6));

?>
