<?php
    $tasks = App::get('database')->selectAll("tasks");
    view("index", ["tasks" => $tasks]);