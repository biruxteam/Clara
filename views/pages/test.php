<?php
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();
echo $_ENV['MYSQL_DB'];
echo "dsddfs";
