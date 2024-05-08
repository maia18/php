<?php

require __DIR__ . '/inc/all.inc.php';

$worldCityRepository = new WorldCityRepository($pdo);
$entries = $worldCityRepository->fetch();

render('index.view', [
    'entries' => $entries
]);