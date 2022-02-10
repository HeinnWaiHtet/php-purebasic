<?php
  
  class App{

     /*
        store request data like db connection
        "database" => [
            "dbName"    => "todo",
            "host"      => "mysql:host=localhost",
            "username"  => "root",
            "password"  => ""
            ]
     */
      protected static $data =[];

      /**
       * store data to $data array
       * @param {string} $key
       * @param {any} $value
       */
      public static function bind($key, $value){
          static::$data[$key] = $value;
      }

      /**
       * get value by key
       * @param {string} $key
       * return data from $data array by key
       */
      public static function get($key){
          return static::$data[$key];
      }
  }