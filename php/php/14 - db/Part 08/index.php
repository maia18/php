<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=localhost;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = 6');
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);

/*
$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = 5 OR `id` = 6 ORDER BY `id` ASC');
$stmt->execute();
while (($result = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
    var_dump($result);
}
*/
/*
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
*/