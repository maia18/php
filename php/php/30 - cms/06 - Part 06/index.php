<?php

require __DIR__ . '/inc/all.inc.php';

$route = @(string) ($_GET['route'] ?? 'pages');

if ($route === 'pages') {
    $page = @(string) ($_GET['page'] ?? 'index');

    $pagesRepository = new \App\Repository\PagesRepository($pdo);

    $pagesController = new \App\Frontend\Controller\PagesController(
        $pagesRepository
    );
    $pagesController->showPage($page);
}
else {
    $notFoundController = new \App\Frontend\Controller\NotFoundController();
    $notFoundController->error404();
}