<?php
class Person {
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        return "Hello, my name is " . $this->name;
    }
}

$person = new Person("John", 25);

echo "Methods: \n";
print_r(get_class_methods($person));

echo "\nProperties: \n";
print_r(get_object_vars($person));
?>