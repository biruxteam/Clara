<?php
use Tracy\Debugger;

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();
echo $id;
