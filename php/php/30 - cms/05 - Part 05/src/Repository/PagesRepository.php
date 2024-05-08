<?php 

namespace App\Repository;

use PDO;
use App\Model\PageModel;

class PagesRepository {

    public function __construct(private PDO $pdo) {}

    public function fetchBySlug(string $slug): ?PageModel {
        $stmt = $this->pdo->prepare('SELECT * FROM `pages` WHERE `slug` = :slug');
        $stmt->bindValue(':slug', $slug);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, PageModel::class);
        $entry = $stmt->fetch();
        return $entry;

        // var_dump($stmt->fetchAll(PDO::FETCH_CLASS, PageModel::class));
    }

}