<?php
var_dump($_POST);
var_dump($_FILES);

if (!empty($_FILES) && !empty($_FILES['image'])) {
    if ($_FILES['image']['error'] === 0 && $_FILES['image']['size'] !== 0) {
        $nameWithoutExtension = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $nameWithoutExtension);

        $originalImage = $_FILES['image']['tmp_name'];
        $destImage = __DIR__ . '/' . $name . '-' . time() . '.jpg';

        [$width, $height] = getimagesize($originalImage);

        $maxDim = 400;
        $scaleFactor = $maxDim / max($width, $height);

        $newWidth = $width * $scaleFactor;
        $newHeight = $height * $scaleFactor;

        $im = imagecreatefromjpeg($originalImage);

        $newImg = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($newImg, $im, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        imagejpeg($newImg, $destImage);
    }
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit" value="Submit!" />
    </form>
</body>
</html>