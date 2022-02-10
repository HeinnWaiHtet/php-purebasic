<?php
require 'core/function.php';
// $config = require "config.php";
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/databases/connection.php';
// require 'core/databases/QueryBuilder.php';

// create database connection
// $pdo = Connection::make($config["database"]);

//create sql query builder
// $query = new QueryBuilder($pdo);

App::bind("config", require "config.php");
App::bind(
    "database",
    new QueryBuilder(
        Connection::make(App::get("config")["database"])
    )
);