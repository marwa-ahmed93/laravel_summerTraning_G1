<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EmployeeController;
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



Route::controller(DriverController::class)->group(function(){




Route::get('/create','create')->name('driver.create');
Route::post('/store','store')->name('driver.store');
Route::get('/drivers','index')->name('driver.index');
Route::get('/show/{id}','show')->name('driver.show');

});





Route::controller(CarController::class)->group(function(){




Route::get('/create/car','create')->name('car.create');
Route::post('/store/car','store')->name('car.store');
Route::get('/cars','index')->name('car.index');
Route::get('/show/{id}','show')->name('car.show');
Route::delete('/delete/{id}','delete')->name('car.delete');

Route::get('restore/{id}','restore')->name('restore.cars');
Route::get('show/deleted','show')->name('show.cars');


});


Route::get('show/{id}',[EmployeeController::class,'show']);
Route::get('employees',[EmployeeController::class,'index']);



// Route::controller([UserController::class])->group(function(){

//   Route::get('/users','index'); 
// Route::get('/create','create' );
// Route::post('/store','store' )->name('users.store');
// });
   
Route::middleware(CheckRole::class)->group(function(){

});
















