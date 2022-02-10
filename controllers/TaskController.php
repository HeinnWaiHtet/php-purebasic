<?php
  class TaskController{

    /**
     * view index function
     */
    public function index(){
        $tasks = App::get('database')->selectAll("tasks");
        view("index", ["tasks" => $tasks]);
    }

    /**
     * view addTask function
     */
    public function addTask(){
        App::get('database')->insert([
            'description' => $_POST['name'],
            'complete'    => false
        ], "tasks");

        header("Location: /"); // redirect to index
        
    }

    /**
     * view about function
     */
    public function about(){
          view("about");
    }

    /**
     * view order function
     */
    public function order(){
          view("order");
    }

    /**
     * view contact function
     */
    public function contact(){
          view("contact");
    }
  }