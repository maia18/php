<?php
var_dump($_POST);
var_dump($_FILES);

if (!empty($_FILES) && !empty($_FILES['image'])) {
    if ($_FILES['image']['error'] === 0 && $_FILES['image']['size'] !== 0) {
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/' . $_FILES['image']['name']);
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