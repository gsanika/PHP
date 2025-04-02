<?php
class ParentClass
{
    public function display()
    {
        echo "This is the display method of ParentClass.<br>";
    }
}

class ChildClass extends ParentClass
{
    public function display()
    {
        echo "This is the display method of ChildClass.<br>";
    }
}

$obj = new ChildClass();
$obj->display();
?>
