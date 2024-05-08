<?php

namespace App\Admin\Controller;

use App\Repository\PagesRepository;

class PagesAdminController extends AbstractAdminController {

    public function __construct(private PagesRepository $pagesRepository) {}

    public function index() {
        $pages = $this->pagesRepository->get();
        $this->render('pages/index', [
            'pages' => $pages
        ]);
    }
}