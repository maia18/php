<?php
/*
$dims = getimagesize(__DIR__ . '/IMG_0294.jpeg');
$width = $dims[0];
$height = $dims[1];
var_dump($dims);
*/

[$width, $height] = getimagesize(__DIR__ . '/IMG_0294.jpeg');
// var_dump($width);
// var_dump($height);

$maxDim = 400;
$scaleFactor = $maxDim / max($width, $height);
// var_dump($scaleFactor);

$newWidth = $width * $scaleFactor;
$newHeight = $height * $scaleFactor;
// var_dump("{$newWidth}x{$newHeight}");

$im = imagecreatefromjpeg(__DIR__ . '/IMG_0294.jpeg');
// var_dump($im);

$newImg = imagecreatetruecolor($newWidth, $newHeight);
imagecopyresampled($newImg, $im, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

// header("Content-Type: image/jpeg");
// imagejpeg($newImg);
imagejpeg($newImg, 'img_scaled.jpg');