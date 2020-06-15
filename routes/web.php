<?php
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Generate Key
$router->get('/key', function () {
    return Str::random(32);
});

$router->get('/get', function () {
    return 'GET';
});

$router->post('/post', function () {
    return 'POST';
});

$router->put('/put', function () {
    return 'PUT';
});

$router->patch('/patch', function () {
    return 'PATCH';
});

$router->delete('/delete', function () {
    return 'DELETE';
});

$router->options('/options', function () {
    return 'OPTIONS';
});

$router->get('/user/{id}', function ($id) {
    return 'User ID = '. $id;
});

$router->get('post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Post ID = ' . $postId . ' Comments ID = ' . $commentId; 
});

$router->get('optional[/{param}]', function ($param = null) {
    return 'Opsi = '. $param;
});