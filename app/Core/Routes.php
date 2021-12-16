<?php
namespace App\Core;
use \App\Services\Router;


Router::page('/test', 'test.php');
Router::enable();