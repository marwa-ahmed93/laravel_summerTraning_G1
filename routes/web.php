<?php

use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {

    Route::get('/welcome', function () {
        echo "say hello";
    });

    Route::get('/greeting/{name?}', function ($name = null) {
        return 'Hello World ' . $name;
    });
});



Route::post('/upload', function (Request $request) {
    dd($request);
});
Route::get('/there', function () {
    echo "welocme";
});
Route::redirect('/welcome', '/there');

Route::view('/hello', 'hello');



// Route::middleware([CheckRole::class])->group(function(){

//  Route::controller([UserController::class])->group(function(){

// Route::get('/user','index')->name('users.index');

// Route::get('/createUser','create');


// Route::post('/user-store','store')->name('users.store');

//  });


// });









Route::post('/server', ProvisionServer::class);
