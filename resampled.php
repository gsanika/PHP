<?php
header("Content-type: image/jpeg");

$src_image = imagecreatefromjpeg('source.jpg');
$src_width = imagesx($src_image);
$src_height = imagesy($src_image);

$scale = 0.5;
$dst_width = $src_width * $scale;
$dst_height = $src_height * $scale;

$dst_image = imagecreatetruecolor($dst_width, $dst_height);

imagecopyresampled($dst_image, $src_image, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

imagejpeg($dst_image);

imagedestroy($src_image);
imagedestroy($dst_image);
?>
