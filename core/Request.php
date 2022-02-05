<?php
class Request{
    
    // return request uri
    public static function uri(){
        return trim($_SERVER["REQUEST_URI"], "/");
    }
}