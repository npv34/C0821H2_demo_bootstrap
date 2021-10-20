<?php


namespace Src\Controller;


use Src\Models\UserModel;

class LoginController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function login($request) {
        $email = $request['email'];
        $password = $request['password'];
        $isAccountExits = $this->userModel->checkAccount($email, $password);
        if ($isAccountExits['SL'] != 0) {
            $_SESSION['isLogin'] = true;
            header('location: index.php');
        } else {

            echo "Account not exist";
        }
    }

    function logout() {
        $_SESSION['isLogin'] = false;
        header('location: login.php');
    }
}