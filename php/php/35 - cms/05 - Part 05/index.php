<?php

require __DIR__ . '/inc/all.inc.php';

$container = new \App\Support\Container();
$container->bind('pdo', function() {
    return require __DIR__ . '/inc/db-connect.inc.php';
});
$container->bind('authService', function() use($container) {
    $pdo = $container->get('pdo');
    return new \App\Admin\Support\AuthService($pdo);
});
$container->bind('pagesRepository', function() use($container) {
    $pdo = $container->get('pdo');
    return new \App\Repository\PagesRepository($pdo);
});
$container->bind('pagesController', function() use($container) {
    $pagesRepository = $container->get('pagesRepository');
    return new \App\Frontend\Controller\PagesController(
        $pagesRepository
    );
});
$container->bind('notFoundController', function() use($container) {
    $pagesRepository = $container->get('pagesRepository');
    return new \App\Frontend\Controller\NotFoundController(
        $pagesRepository
    );
});
$container->bind('pagesAdminController', function() use($container) {
    $pagesRepository = $container->get('pagesRepository');
    return new \App\Admin\Controller\PagesAdminController($pagesRepository);
});
$container->bind('loginController', function() use($container) {
    $authService = $container->get('authService');
    return new \App\Admin\Controller\LoginController(
        $authService
    );
});

$route = @(string) ($_GET['route'] ?? 'pages');

if ($route === 'pages') {
    $page = @(string) ($_GET['page'] ?? 'index');

    $pagesController = $container->get('pagesController');
    $pagesController->showPage($page);
}
else if ($route === 'admin/login') {
    $loginController = $container->get('loginController');
    $loginController->login();
}
else if ($route === 'admin/pages') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->index();
}
else if ($route === 'admin/pages/create') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->create();
}
else if ($route === 'admin/pages/edit') {
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->edit();
}
else if ($route === 'admin/pages/delete') {
    // $id = @(int) ($_GET['id'] || 0);
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->delete();
}
else {
    $notFoundController = $container->get('notFoundController');
    $notFoundController->error404();
}