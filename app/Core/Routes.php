<?php
require_once $_SERVER['DOCUMENT_ROOT']."/app/Services/Router.php";


get('/products', 'views/pages/test.php');
get('/test/$id', 'views/pages/test.php');

any('/404', 'views/pages/Errors/404.php');
