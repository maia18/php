<?php

namespace Admin;

class User {

    public Role $role;
    public function __construct() {
        $this->role = new Role();
    }
}