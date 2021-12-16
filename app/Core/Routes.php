<?php
namespace App\Core;
use \App\Services\Router;


Router::page('/test', 'pages/test.php');
Router::page('/static/js/example', 'js/example.js');
Router::enable();