<?php 
    function dd($data){
        echo '<pre>';
        die(var_dump($data));
    }

    function dbConnection(){
        try{
            return new PDO('mysql:host=localhost;dbname=todo;','root','');
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    function fetchTasks($pdo){
        $statement = $pdo->prepare('select * from tasks');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
?>