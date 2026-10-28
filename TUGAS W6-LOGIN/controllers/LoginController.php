<?php
require_once 'models/UserModel.php';

class LoginController {
    public function handleRequest() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $user = $userModel->checkLogin($email, $password);

            if ($user) {
                $_SESSION['user'] = $user;
                include 'views/dashboard.php';
            } else {
                $error = "Login gagal. Email atau password salah.";
                include 'views/login.php';
            }
        } else {
            include 'views/login.php';
        }
    }
}
?>