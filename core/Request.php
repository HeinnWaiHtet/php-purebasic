<?php
class Request{
    
    /**
     * return request uri by trim '/'
     */
    public static function uri(){
        return parse_url(
            trim(
                $_SERVER['REQUEST_URI'], '/'
            ),
            PHP_URL_PATH
        );
    }
}