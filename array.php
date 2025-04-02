<?php
$a1=array("sanika","priya","nita","diya");
foreach($a1 as $i)
{
echo $i ."<br>";
}
print_r($a1);
for($i=0;$i<count($a1);$i++)
{

    print(" ".$i);
}

$a2=array("A"=>"Apple","B"=>"Ball","C"=>"Cat");
foreach($a2 as $i=>$k)
{
    print("<br>".$k);
}
print_r($a2);

$a3=[array('a','b','c'),array('k','h','u')];
echo "<br>";
print_r($a3);
echo "<br>";
?>