<?php
$serialized_value = serialize(array("hello","sanika"));
echo "Serialized: " . $serialized_value . "<br>";

$deserialized_value = unserialize($serialized_value);

echo "Deserialized: ";
print_r($deserialized_value);
?>
