<?php
    require 'core/bootstrap.php';

    require Router::load("routes.php")->
      direct(Request::uri(), $_SERVER['REQUEST_METHOD']);
?>