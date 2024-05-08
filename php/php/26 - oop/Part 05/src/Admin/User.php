<?php

namespace App\Admin;

class User {

    public Role $role;
    public function __construct() {
        $this->role = new Role();
    }
}