<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=localhost;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$title = 'A title (from PHP)';
$content = 'The content \'"(from PHP)';

$stmt = $pdo->prepare("INSERT INTO `notes` (`title`, `content`) VALUES (:title, :content)");
$stmt->bindValue('title', $title);
$stmt->bindValue('content', $content);
$stmt->execute();