<?php
//static nedir ? 
// static bir değişkenin değeri bir kere tanımlandıktan sonra değişmez. Ramde tanımlanır

class Router
{
    private static $url;
    public function __construct($rqUrl)
    {
        self::$url = $rqUrl;
    }
    public static function get($fnUrl, $callback)
    {
        $fnUrl = trim($fnUrl, '/');
        self::$url = trim(self::$url, '/');
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (self::$url == $fnUrl) {
                call_user_func($callback);
            }
        }
    }

    public static function post()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo self::$url;
        }
    }
}
