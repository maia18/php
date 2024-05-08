<?php

header('Content-Type: image/jpeg');

if (rand(1, 2) === 1) {
    readfile(__DIR__ . '/IMG_0933.jpg');
}
else {
    readfile(__DIR__ . '/IMG_0294.jpg');
}

// echo file_get_contents(__DIR__ . '/IMG_0933.jpg');