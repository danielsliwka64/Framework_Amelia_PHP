<?php
require_once 'init.php';

foreach (glob(__DIR__ . '/app/controllers/*.class.php') as $file) {
    require_once $file;
}

// routing
require_once 'routing.php';

// komunikaty z sesji
\core\SessionUtils::loadMessages();

// start routera
\core\App::getRouter()->go();
