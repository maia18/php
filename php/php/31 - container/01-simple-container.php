<?php

header('Content-Type: text/plain');

class PostsRepository {
    public function __construct(
        private string $a, 
        private string $b
    ) {}
}
class PostsController {
    public function __construct(
        private PostsRepository $postsRepository
    ) {}
}
/*
$postsRepository = new PostsRepository('A', 'B');
$postsController = new PostsController($postsRepository);
*/

class Container {
    public function getPostsRepository(): PostsRepository {
        return new PostsRepository('A', 'B');
    }
    public function getPostsController(): PostsController {
        $postsRepository = $this->getPostsRepository();
        return new PostsController($postsRepository);
    }
}

$container = new Container();
$postsController = $container->getPostsController();
var_dump($postsController);