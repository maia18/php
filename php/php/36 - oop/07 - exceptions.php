<?php

class UserNotAdminException extends Exception {}
class TitleTooShortException extends Exception {}

function edit_page($user, $title) {
    if ($user !== 'admin') {
        throw new UserNotAdminException('The user is not "admin".');
    }
    if (strlen($title) < 3) {
        throw new TitleTooShortException('The title is too short.');
    }
    // Editing / Updating the page
}

try {
    $file = fopen(__DIR__ . '/book.txt', 'r');
    edit_page('admin', 'a');
    echo "---";
}
catch (UserNotAdminException $e) {
    echo "USER IS NOT ADMIN!!!!11111";
}
catch (TitleTooShortException $e) {}
finally {
    if (!empty($file)) fclose($file);
}