<?php

setcookie('str', 'Hello World!', 
    expires_or_options: time() + 30 * 24 * 60 * 60
);

var_dump($_COOKIE);