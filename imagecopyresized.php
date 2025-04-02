<?php
header("Content-type: image/jpeg");

$src_image = imagecreatefromjpeg('il.jpg');
$dst_image = imagecreatetruecolor(750, 750);

$src_width = imagesx($src_image);
$src_height = imagesy($src_image);

imagecopyresized($dst_image, $src_image, 0, 0, 0, 0, 750, 750, $src_width, $src_height);

imagejpeg($dst_image);

imagedestroy($src_image);
imagedestroy($dst_image);
?>
