<?php
namespace app\controllers;

class LoginCtrl {

    public function action_login() {

        $login = $_POST['login'] ?? null;
        $pass  = $_POST['pass'] ?? null;

        if ($login === 'admin' && $pass === 'admin') {
            \core\SessionUtils::store('user', $login);
            \core\App::getRouter()->redirectTo('loanCalc');
            return;
        }

        \core\Utils::addErrorMessage('Nieprawidłowy login lub hasło');

        \core\App::getSmarty()->display('Login.tpl');
    }
}
