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
    private array $recipes = [];
    public function __construct() {
        $this->recipes['postsRepository'] = function() {
            return new PostsRepository('A', 'B');
        };
        $this->recipes['postsController'] = function() {
            $postsRepository = $this->get('postsRepository');
            return new PostsController($postsRepository);
        };
    }
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
    /*
    public function get($what) {
        if ($what === 'postsRepository') {
            if (empty($this->instances['postsRepository'])) {
                $this->instances['postsRepository'] = $this->recipes['postsRepository']();
            }
            return $this->instances['postsRepository'];
        }
        else if ($what === 'postsController') {
            if (empty($this->instances['postsController'])) {
                $this->instances['postsController'] = $this->recipes['postsController']();
            }
            return $this->instances['postsController'];
        }
    }
    */
}
$container = new Container();
$postsRepository = $container->get('postsRepository');
var_dump($postsRepository);
$postsController = $container->get('postsController');
var_dump($postsController);