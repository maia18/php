<?php
header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename=image.jpg');
header('Content-Lenght: ' . filesize(__DIR__ . '/IMG_0933.jpg'));

readfile(__DIR__ . '/IMG_0933.jpg');