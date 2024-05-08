<?php header('Content-Type: text/plain');
class PostsRepository {
    public function __construct(private string $a, private string $b) {
        var_dump("PostsRepository has been constructed...");
    }
}
class PostsController {
    public function __construct(private PostsRepository $postsRepository) {}
}
class Container {
    private PostsRepository $postsRepository;
    public function getPostsRepository(): PostsRepository {
        if (empty($this->postsRepository)) {
            $this->postsRepository = new PostsRepository('A', 'B');
        }
        return $this->postsRepository;
    }

    private PostsController $postsController;
    public function getPostsController(): PostsController {
        if (empty($this->postsController)) {
            $postsRepository = $this->getPostsRepository();
            $this->postsController = new PostsController($postsRepository);
        }
        return $this->postsController;
    }
}
$container = new Container();
$postsRepository = $container->getPostsRepository();
var_dump($postsRepository);
$postsController = $container->getPostsController();
var_dump($postsController);
$postsController2 = $container->getPostsController();
var_dump($postsController2);
