<?php

use App\DeviceMapper;
require '../src/App/DeviceMapper.php';

$config = require 'settings.php';

$pdo = new \PDO(
    $config['database']['dsn'],  
    $config['database']['username'],
    $config['database']['password'],
    $config['database']['options'],
);
$name = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
if ($name === 'sqlite') {
    $pdo->exec('PRAGMA foreign_keys = ON');
}

$DeviceMapper = new DeviceMapper($pdo);