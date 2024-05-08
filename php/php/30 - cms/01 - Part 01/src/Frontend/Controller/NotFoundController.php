<?php

namespace App\Frontend\Controller;

class NotFoundController {

    public function error404() {
        http_response_code(404);
        echo "I'm an error page (from the controller)!";
    }

}