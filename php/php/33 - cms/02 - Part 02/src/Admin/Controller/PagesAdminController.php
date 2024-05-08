<?php

namespace App\Admin\Controller;

class PagesAdminController extends AbstractAdminController {

    public function index() {
        // $this->error404();
        $this->render('pages/index', []);
    }
}