<?php

use \Entities\Database;

require_once __DIR__.'/../bootstrap/bootstrap.php';

require_once __DIR__.'/../app/Entities/Database.php';


$connection = new Database();
$consult = $connection->connecting();
