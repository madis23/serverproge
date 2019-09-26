<?php
use App\Cat;
use App\DB;
use App\DI;
use App\Router;

require __DIR__ . '../vendor/autoload.php';

require('../App/helpers.php');
$router = new AltoRouter();
// map homepage
$router->map( 'GET', '/', function() {
    echo "<h1>home</h1>";
});
$router->map( 'GET', '/user/[i:id]/', function( $id ) {
    echo "<h1>home</h1>"
});

$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

//DI::$DB = new DB('database', 'root', 'secret', 'homestead');
//DI::$DB->connect();
//DI::$router = new Router($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"], "/");
//DI::$router->match();

