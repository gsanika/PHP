<?php
class Demo
{
    function square($a)
    {
        echo "Square of ".$a." = ".($a * $a)."<br>";
    }
}

class Myclass extends Demo
{
    function cube($a)
    {
        echo "cube of a = ".($a*$a*$a)."<br>";
    }
}

$a = new Myclass();
$a->square(5);
$a->cube(5);
?>
