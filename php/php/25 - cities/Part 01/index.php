<?php

require __DIR__ . '/inc/all.inc.php';

$budapest = new WorldCityModel();
$budapest->city = 'Budapest';
$budapest->country = 'Hungary';
$budapest->population = 1200000;

$berlin = new WorldCityModel();
$berlin->city = 'Berlin';
$berlin->country = 'Germany';
$berlin->population = 2000000;

$nyc = new WorldCityModel();
$nyc->city = 'New York City';
$nyc->country = 'USA';
$nyc->population = 8000000;

$entries = [
    $budapest,
    $berlin,
    $nyc
];

render('index.view', [
    'entries' => $entries
]);