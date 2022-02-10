<?php

//www.localhost.com:8080/

// $router->register([
//     ""          => "controllers/IndexController.php",
//     "about"     => "controllers/AboutController.php",
//     "contact"   => "controllers/ContactController.php",
//     "order"     => "contorllers/OrderController.php",
//     "names"     => "controllers/add-name.php"
// ]);

$router->get("" , "controllers/IndexController.php");
$router->get("about" , "controllers/AboutController.php");
$router->get("order" , "controllers/OrderController.php");
$router->get("contact" , "controllers/ContactController.php");
$router->post("names" , "controllers/add-name.php");
