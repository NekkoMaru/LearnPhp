<?php 

spl_autoload_register(function($class) {
    $class = substr($class, 4);
    require_once __DIR__ . "/../src/$class.php";
});

use App\Exceptions\NotFoundException;
use App\Router;

include __DIR__ . '/../routes.php';
include __DIR__ . '/../helpers.php';

try {
    $router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    $match = $router->match();
    if ($match) {
        if (is_callable($match['action'])) {
            call_user_func($match['action']);
        } elseif (is_array($match['action']) && count($match['action']) === 2) {
            $class = $match['action'][0];
            $controller = new $class();
            $method = $match['action'][1];
            $controller->$method();
        } else {
            throw new NotFoundException();
        }
    } else {
        throw new NotFoundException();
    }
} catch (NotFoundException $e) {
    http_response_code(404);
    view('404');
}


