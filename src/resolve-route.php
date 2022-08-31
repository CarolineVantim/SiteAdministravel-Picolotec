<?php

function resolve($route){
    $path = $_SERVER['PATH_INFO'] ?? '/';


    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if (preg_match($route, $path, $params)){
        return $params;
    }

    // var_dump($params);
    
    return false;
}