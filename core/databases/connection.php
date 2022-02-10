<?php
class Connection{

    /**
     * create connection
     * @param {array} $config
     * return PDO database connection
     */
    public static function make($config){
        try{
            return new PDO("{$config['host']};dbname={$config['dbName']};",
            "{$config['username']}",
            "{$config['password']}");
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
}