<?php
require_once "vendor/autoload.php";

use OrionApi\App\Services\TestService;
use OrionApi\Core\App;
use OrionApi\Core\Http\Router;


/**
 * **********************************************************************************************************
 * Welcome to shyamdubey/fastphp A Lightweight PHP Framework for creating RestFul APIs. This Framework is developed on core php by Author Shyam Dubey. 
 * You can start from this file. 
 * 
 * 
 * 
 * Basic Structure of Project will be 
 *
 * src
 *   -app
 *      -Middleware
 *      -Model
 *      -Repo
 *      -Service
 *      Settings.php
 *   -core
 *      (Code which needs not to be changed)
 *   -logs
 * -vendor
 * composer.json
 * composer.lock
 * index.php
 * 
 * 
 * 
 * In this framework, everything is simple and easy to use. 
 * Here is the example for creating an endpoint in your application
 * 
 * Router::get("/test",TestService::class."@index");
 * 
 * Points: 
 *      --in the second parameter, provide fully qualified Class Name. You can use ClassName::class or "App\Services\TestService"."@index"
 *  
 * 
 * That's It. It will call the function index() of TestService
 * 
 * If you want to add any Middleware for any route you can add that Middleware in Router::func($url, $callback, $middleware = []) 
 * $middleware should be provided in array.
 * 
 * 
 * Now to run the project open the project in terminal and run the command
 * 
 * 
 * 
 * 
 *php -S localhost:8080
 * 
 * 
 *the application will be live on localhost:8080 .
 * 
 * 
 * ***********************************************************************************************************
 */

Router::get("/test/{val}", TestService::class."@test");
Router::get("/", TestService::class."@index");




//place at the end
App::start();
