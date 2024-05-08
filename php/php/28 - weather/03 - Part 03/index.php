<?php

use App\Weather\FakeWeatherFetcher;
use App\Weather\RandomWeatherFetcher;

require __DIR__ . '/inc/all.inc.php';

$fetcher = new RandomWeatherFetcher();
$info = $fetcher->fetch('New York City');



require __DIR__ . '/views/index.view.php';
