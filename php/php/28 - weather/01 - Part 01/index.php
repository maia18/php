<?php

use App\Weather\FakeWeatherFetcher;

require __DIR__ . '/inc/all.inc.php';

$fetcher = new FakeWeatherFetcher();
$info = $fetcher->fetch('New York City');

var_dump($info);

require __DIR__ . '/views/index.view.php';
