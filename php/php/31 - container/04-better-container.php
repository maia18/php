<?php 
header('Content-Type: text/plain');
class PostsRepository {
    public function __construct(private string $a, private string $b) {
        var_dump("PostsRepository has been constructed...");
    }
}
class PostsController {
    public function __construct(private PostsRepository $postsRepository) {}
}

class Container {
    private array $instances = [];
    public function getPostsRepository(): PostsRepository {
        if (empty($this->instances['postsRepository'])) {
            $this->instances['postsRepository'] = new PostsRepository('A', 'B');
        }
        return $this->instances['postsRepository'];
    }

    public function getPostsController(): PostsController {
        if (empty($this->instances['postsController'])) {
            $postsRepository = $this->getPostsRepository();
            $this->instances['postsController'] = new PostsController($postsRepository);
        }
        return $this->instances['postsController'];
    }
}
$container = new Container();
$postsRepository = $container->getPostsRepository();
var_dump($postsRepository);
$postsController = $container->getPostsController();
var_dump($postsController);