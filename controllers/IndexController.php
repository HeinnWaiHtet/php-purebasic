<?php
    $tasks = $query->selectAll("tasks");
    view("index", ["tasks" => $tasks]);