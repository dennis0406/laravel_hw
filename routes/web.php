<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoomManagerController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route for example
Route::group(['prefix'=>'MyGroup'],function(){
    Route :: get('User1',function(){
        echo "User1";
    });
    Route :: get('User2',function(){
        echo "User2";
    });
    Route :: get('User3',function(){
        echo "User3";
    });
});


// Route for UserController
Route::controller(UserController::class)->group(function () {
    Route::get('/greeting', 'index');
    Route::post('/greeting', 'sum');
});

// Route for SinupController
Route::controller(SignUpController::class)->group(function () {
    Route::get('/signup', 'index');
    Route::post('/signup', 'validated');
});

// Route for RoomManagerController
Route::controller(RoomManagerController::class)->group(function () {
    Route::get('/addRoom', 'index');
    Route::post('/addRoom', 'create');
});
