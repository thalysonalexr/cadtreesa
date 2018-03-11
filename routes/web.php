<?php

use app\classes\Route;

$route = new Route;

$route->get("/", "Index@index");

$route->get("/arvores/listar/[i:id]", "Tree@list");

try {
	$route->dispatch();
} catch (Exception $e){
	redirectHome();
}