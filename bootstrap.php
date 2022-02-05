<?php
$config = require "config.php";
require 'function.php';
require 'databases/connection.php';
require 'databases/QueryBuilder.php';

$pdo = Connection::make($config["database"]);
$query = new QueryBuilder($pdo);