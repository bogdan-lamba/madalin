<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

require 'config/db_connect.php';
require 'views/layouts/header.view.php';
require 'views/layouts/nav.view.php';
require 'views/layouts/jumbotron.view.php';

//router
switch ($_SERVER['REQUEST_URI']) {
    case '/blog-mada/':
    case '/blog-mada/index.php':
        require 'controllers/home.controller.php';
        break;
    case '/blog-mada/about':
        require 'controllers/about.controller.php';
        break;
    case '/blog-mada/contact':
        require 'controllers/contact.controller.php';
        break;
    default:
        echo 'Page not found!';
}

require 'views/order_buttons.view.php';
require 'views/layouts/sidebar.view.php';
require 'views/layouts/footer.view.php';
