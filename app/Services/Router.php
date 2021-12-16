<?php

namespace App\Services;
class Router {

    private static $list = [];

    public static function page($uri, $page_name) {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function post($uri, $class, $method) {
        self::$list[] = [
            "uri" => $uri,
            "class" => $class,
            "method" => $method,
            "post" => true
        ];
    }

    public static function enable() {
        $query = $_GET['q'];
        foreach (self::$list as $route) {
            if ($route["uri"] === '/'.$query) {
                if ($route["post"] === true && $_SERVER["REQUEST_METHOD"] === "POST") {
                    $action = new $route["class"];
                    $method = $route["method"];
                    if ($route["formdata"] && $route["files"]) {
                        $action->$method($_POST, $_FILES);
                    } else if ($route["formdata"] && !$route["files"]) {
                        $action->$method($_POST);
                    } else {
                        $action->$method();
                    }
                    die();
                } else {
                require_once "views/pages/".$route["page"];
                die();
                }
            }
        }
        self::notfound();
        //print_r(self::$list);
    }

    
    private static function notfound() {
        require_once "views/pages/Errors/404.php";
    }

}