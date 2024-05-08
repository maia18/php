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
    public array $recipes = [];
    public function get($what) {
        if (empty($this->instances[$what])) {
            if (empty($this->recipes[$what])) {
                echo "Could not build: {$what}.\n";
                die();
            }
            $this->instances[$what] = $this->recipes[$what]();
        }
        return $this->instances[$what];
    }
}
$container = new Container();
$container->recipes['postsRepository'] = function() {
    return new PostsRepository('A', 'B');
};
$container->recipes['postsController'] = function() use($container) {
    $postsRepository = $container->get('postsRepository');
    return new PostsController($postsRepository);
};

$postsRepository = $container->get('postsRepository');
var_dump($postsRepository);
$postsController = $container->get('postsController');
var_dump($postsController);