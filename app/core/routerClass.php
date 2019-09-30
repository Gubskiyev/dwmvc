<?php

class Router {
    public static function run() {
        $url = substr($_SERVER['REQUEST_URI'],1);
			if(($pos = strpos($url, "?")) !== false) {
				$url = substr($url, 0, $pos);
			}
		$arrArg = explode('/',$url);
		
        $controllerName = 'Index';
        $actionName = 'View';

        if(!empty($arrArg[0])) $controllerName = $arrArg[0];
        if(!empty($arrArg[1])) $actionName = $arrArg[1];
        if(!empty($arrArg[2])) $paramName = intval($arrArg[2]);
        if(!empty($arrArg[3])) $paramName2 = $arrArg[3];

        $controllerFile = 'controller'.ucfirst($controllerName).'.php';
        $modelFile = 'model'.ucfirst($controllerName).'.php';

        if(file_exists('app/controllers/'.$controllerFile)) {
            include 'app/controllers/'.$controllerFile;
        } else static::page404();

        if(file_exists('app/models/'.$modelFile)) {
            include 'app/models/'.$modelFile;
        }

        $controllerName = 'Controller'.ucfirst($controllerName);
        if($controllerName == 'ControllerIndex') {
            include 'app/views/index.php';die;
        }
        $actionName = 'action'.ucfirst($actionName);

        $controllerObject = new $controllerName;

        if(method_exists($controllerObject,$actionName)) {
            $controllerObject->$actionName($paramName,$paramName2);
        } else self::page404();
    }

    public static function page404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}