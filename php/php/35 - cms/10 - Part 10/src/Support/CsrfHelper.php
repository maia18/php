<?php

namespace App\Support;

class CsrfHelper {
    public function handle() {
        $this->ensureSession();

        var_dump("CsrfHelper::handle has been called");
    }

    private function ensureSession() {
        if (session_id() === '') {
            session_start();
        }
    }

    public function generateToken(): string {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $token;
        return $token;
    }
}