<?php
    require 'bootstrap.php';
    
    $tasks = $query->selectAll("tasks");
    // dd($tasks);

    require 'index.view.php';
?>