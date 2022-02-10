<?php
    $query->insert([
        'description' => $_POST['name'],
        'complete'    => false
    ], "tasks");

    header("Location: /"); // redirect to index