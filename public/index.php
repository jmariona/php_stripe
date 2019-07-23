<?php

require_once __DIR__.'/../bootstrap/bootstrap.php';

require_once __DIR__.'/../app/Entities/Database.php';


$connection = new \Entities\Database();
$connection->connecting();

