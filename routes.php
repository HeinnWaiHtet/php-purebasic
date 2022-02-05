<?php

//www.localhost.com:8080/

$router->register([
    ""          => "controllers/IndexController.php",
    "about"     => "controllers/AboutController.php",
    "contact"   => "controllers/ContactController.php",
    "order"     => "contorllers/OrderController.php"
]);