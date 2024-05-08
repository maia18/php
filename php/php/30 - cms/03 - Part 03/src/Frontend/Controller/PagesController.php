<?php

namespace App\Frontend\Controller;

class PagesController extends AbstractController {

    public function showPage($pageKey) {
        // TODO: Fetch the actual page
        // echo "PagesController is showing the page: {$pageKey}\n";

        $this->render('pages/showPage', []);
    }
}