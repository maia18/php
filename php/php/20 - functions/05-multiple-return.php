<?php
header('Content-Type: text/plain');


function fetch_news($id) {
    if ($id >= 100) {
        return false;
    }
    return [
        'id' => $id,
        'title' => 'The title of the news!',
        'content' => 'The content of the news...'
    ];
}

$a = fetch_news(123);

if (!empty($a)) {
    var_dump($a);
}
else {
    echo "The news could not be found.\n";
}

