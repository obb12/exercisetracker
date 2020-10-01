<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\UserController;

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
  return response(view('index'));
});
Route::post('/api/exercise/new-user', [UserController::class, 'create']);
Route::post('/api/exercise/add', [UserController::class, 'createexercise']);
Route::get('/api/exercise/log', [UserController::class, 'showlog']);
Route::get('/api/exercise/users', [UserController::class, 'showusers']);
