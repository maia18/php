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

    public function create() {
        if (!empty($_POST)) {
            $title = @(string) ($_POST['title'] ?? '');
            $slug = @(string) ($_POST['slug'] ?? '');
            $content = @(string) ($_POST['content'] ?? '');

            if (!empty($title) && !empty($slug) && !empty($content)) {
                $slugExists = $this->pagesRepository->getSlugExists($slug);
                if (empty($slugExists)) {
                    $this->pagesRepository->create($title, $slug, $content);
                }
            }
        }
        $this->render('pages/create', []);
    }
}