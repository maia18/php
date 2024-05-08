<?php
declare(strict_types=1);

function fetch_names_by_initial(string $char): array {
    global $pdo;

    $stmt = $pdo->prepare('SELECT DISTINCT `name` FROM `names` WHERE `name` LIKE :expr ORDER BY `name` ASC');
    $stmt->bindValue(':expr', "{$char}%");
    $stmt->execute();
    $names = [];
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results AS $result) {
        $names[] = $result['name'];
    }
    return $names;
}

