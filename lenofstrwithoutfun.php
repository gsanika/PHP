<?php
$str = "i am sanika"; 
$length = 0;  


for ($i = 0; isset($str[$i]); $i++) {
    $length++;  
}

echo "The length of the string is: " . $length;



$str1 = "sanika fh fhbf hf"; 

$wc = 0;  

for ($i = 0; isset($str1[$i]); $i++) {
    if ($str1[$i] == ' ') {
        $wc++;
    }
}

$wc++;
echo "<br>";

echo "The number of words in the string is: " . $wc;


?>
