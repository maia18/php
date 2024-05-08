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
        $errors = [];

        if (!empty($_POST)) {
            $title = @(string) ($_POST['title'] ?? '');
            $slug = @(string) ($_POST['slug'] ?? '');
            $content = @(string) ($_POST['content'] ?? '');

            $slug = strtolower($slug);
            $slug = str_replace(['/', ' ', '.'], ['-', '-', '-'], $slug);
            $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);

            if (!empty($title) && !empty($slug) && !empty($content)) {
                $slugExists = $this->pagesRepository->getSlugExists($slug);
                if (empty($slugExists)) {
                    $this->pagesRepository->create($title, $slug, $content);
                    header("Location: index.php?route=admin/pages");
                    return;
                }
                else {
                    $errors[] = 'Slug already exists!';
                }
            }
            else {
                $errors[] = 'Are all fields filled out?';
            }
        }
        $this->render('pages/create', [
            'errors' => $errors
        ]);
    }
}