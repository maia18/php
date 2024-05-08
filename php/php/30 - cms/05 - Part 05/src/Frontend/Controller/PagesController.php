<?php

namespace App\Frontend\Controller;

use App\Repository\PagesRepository;

class PagesController extends AbstractController {

    public function __construct(private PagesRepository $pagesRepository) {}

    public function showPage($pageKey) {
        $page = $this->pagesRepository->fetchBySlug($pageKey);

        $this->render('pages/showPage', [
            'page' => $page
        ]);
    }
}