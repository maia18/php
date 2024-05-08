<?php

class PageModel implements ArrayAccess, Countable {
    public string $title = 'Hello World';

    public function offsetExists(mixed $offset): bool {
        return isset($this->{$offset});
    }
    public function offsetGet(mixed $offset): mixed {
        return $this->{$offset};
    }
    public function offsetSet(mixed $offset, mixed $value): void {
        $this->{$offset} = $value;
    }
    public function offsetUnset(mixed $offset): void {
        unset($this->{$offset});
    }

    public function count(): int {
        return 10;
    }
}

$aboutUs = new PageModel();
$aboutUs['title'] = 'About us!';
var_dump(isset($aboutUs['title']));
var_dump($aboutUs['title']);
var_dump(count($aboutUs));