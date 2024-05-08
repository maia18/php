<?php

class PageModel {
    public array $attributes;

    public function __construct() {
        $this->attributes = [
            'id' => 5,
            'title' => 'Hello World'
        ];
    }

    public function __get($key) {
        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        }
        return null;
    }
    public function __set($key, $value) {
        $this->attributes[$key] = $value;
    }
    public function __isset($key) {
        return true;
    }
    public function __unset($key) {
        var_dump("__unset() has been called with: {$key}");
    }
}

$aboutUs = new PageModel();
$aboutUs->content = 'This is the content';
var_dump($aboutUs);

var_dump(isset($aboutUs->content));
unset($aboutUs->content);
unset($aboutUs->attributes);
var_dump($aboutUs);