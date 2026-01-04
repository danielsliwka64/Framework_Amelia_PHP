<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login');
App::getRouter()->setLoginRoute('login');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LogoutCtrl');
Utils::addRoute('loanCalc', 'LoanCalcCtrl');

