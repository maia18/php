<?php 

namespace App\Repository;

use PDO;
use App\Model\PageModel;

class PagesRepository {

    public function __construct(private PDO $pdo) {}

    public function fetchForNavigation(): array {
        return $this->get();
    }

    public function get(): array {
        $stmt = $this->pdo->prepare('SELECT * FROM `pages` ORDER BY `id` ASC');
        $stmt->execute();
        $entries = $stmt->fetchAll(PDO::FETCH_CLASS, PageModel::class);
        return $entries;
    }

    public function fetchBySlug(string $slug): ?PageModel {
        $stmt = $this->pdo->prepare('SELECT * FROM `pages` WHERE `slug` = :slug');
        $stmt->bindValue(':slug', $slug);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, PageModel::class);
        $entry = $stmt->fetch();
        if (!empty($entry)) {
            return $entry;
        }
        else {
            return null;
        }
    }

    public function getSlugExists(string $slug): bool {
        $stmt = $this->pdo->prepare('SELECT COUNT(*) AS `count` FROM `pages` WHERE `slug` = :slug');
        $stmt->bindValue(':slug', $slug);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result['count'] >= 1);
    }
    public function create(string $title, string $slug, string $content) {
        $stmt = $this->pdo->prepare('INSERT INTO `pages` (`title`, `slug`, `content`) 
            VALUES(:title, :slug, :content)');
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':slug', $slug);
        $stmt->bindValue(':content', $content);
        $stmt->execute();
    }

}