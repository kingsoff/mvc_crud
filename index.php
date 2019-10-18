<?php
require "Controllers/Controller.php"; // head Controller
require "Models/Database.php"; // Model - SQL operations
require "Models/Model.php"; // Model - Function sampling, output
require "Models/Record.php"; // Model Record  - Function additions

$config = require "resources/config/config.php"; // path to file connection mysql

$dsn = "mysql:host=".$config['db_host'].";dbname=".$config['db_name'].";charset=".$config['db_charset'];
$pdo = new PDO($dsn, $config['db_user'], $config['db_password'], $config['db_options']);
$db = new Database($pdo);

$controller = new Controller($db);
$controller->index();