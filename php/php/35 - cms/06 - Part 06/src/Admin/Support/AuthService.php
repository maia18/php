<?php

namespace App\Admin\Support;

use PDO;

class AuthService {

    public function __construct(private PDO $pdo) {}

    public function handleLogin(string $username, string $password): bool {
        if (empty($username)) return false;
        if (empty($password)) return false;

        $stmt = $this->pdo->prepare('SELECT `id`, `password` FROM `users` WHERE `username` = :username');
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $entry = $stmt->fetch(PDO::FETCH_ASSOC);
        if (empty($entry)) {
            return false;
        }

        $hash = $entry['password'];
        $passwordOk = password_verify($password, $hash);
        if (empty($passwordOk)) {
            return false;
        }

        session_start();
        $_SESSION['adminUserId'] = $entry['id'];
        session_regenerate_id();

        return true;
    }
}