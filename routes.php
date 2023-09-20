<?php

use App\Router;

Router::addRoutes('/', function (){
    include 'views/index.php';
});

Router::addRoutes('/about', function (){
    include 'views/about.php';
});
