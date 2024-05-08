<?php

require __DIR__ . '/inc/all.inc.php';

$page = @(string) ($_GET['page'] ?? 'index');

if ($page === 'index') {
    $pagesRepository = new \App\Repository\PagesRepository($pdo);

    $pagesController = new \App\Frontend\Controller\PagesController(
        $pagesRepository
    );
    $pagesController->showPage('index');
}
else {
    $notFoundController = new \App\Frontend\Controller\NotFoundController();
    $notFoundController->error404();
}