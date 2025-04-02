<?php
header("Content-Type: image/png");

$image = imagecreatefrompng('C:/xampp/htdocs/sanika/i1.png');
if (!$image) {
    die('Failed to load image.');
}

if (!imageflip($image, IMG_FLIP_VERTICAL)) {
    die('Failed to flip image.');
}

$new_width = 800;
$new_height = 600;

$scaled_image = imagescale($image, $new_width, $new_height);
if (!$scaled_image) {
    die('Failed to scale image.');
}

imagepng($scaled_image);

imagedestroy($image);
imagedestroy($scaled_image);
?>
