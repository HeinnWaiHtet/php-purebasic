<?php
$config = require "config.php";
require 'core/function.php';
require 'core/databases/connection.php';
require 'core/databases/QueryBuilder.php';

$pdo = Connection::make($config["database"]);
$query = new QueryBuilder($pdo);