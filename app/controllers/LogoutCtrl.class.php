<?php
namespace app\controllers;

class LogoutCtrl {

    public function action_logout() {
        \core\SessionUtils::remove('user');
        \core\App::getRouter()->redirectTo('login');
    }
}
