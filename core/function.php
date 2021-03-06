<?php 

    /**
     * die dub function with data
     * @param {any} $data
     */
    function dd($data){
        echo '<pre>';
        die(var_dump($data));
    }

    /**
     * go to view with data or not
     * @param {string} $name
     * @param {array} $data
     * eg $name = "index", "contact", etc
     * eg $data = ["usersData" => $userModel]
     */
    function view($name, $data = []){
        /*
          change send data to desire format
          eg ["userData" => $user] 
          change model data $user to userData in view
        */
        extract($data);
        return require "views/$name.view.php";
    }

    /**
     * redirect request uri
     * @param {string} $uri
     */
    function redirect($uri){
        header("Location: $uri");
    }

    /**
     * sql dbl connection 
     * return PDO database connection
     */
    function dbConnection(){
        try{
            return new PDO('mysql:host=localhost;dbname=todo;','root','');
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    /**
     * get database data
     * @param {PDO} $pdo
     * return table reterive data
     */
    function fetchTasks($pdo){
        $statement = $pdo->prepare('select * from tasks');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * return request data value by request name after check request method
     * @param {string} $name
     */
    function request($name){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            return $_POST[$name];
        }

        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            return $_GET[$name];
        }
    }
?>