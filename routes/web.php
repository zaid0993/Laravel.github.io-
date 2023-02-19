<?php

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\A;
use App\Http\Controllers\Admin;



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

Route::get('/Z', function () {


    return view('welcome');
});

Route::get('/test1', function () {
    return 'Welcome';
})->name('zaid');
/*
Route::get('/test2/{id? }', function ($id) {
    return $id;
});
Route::get('index','App\Http\Front\Controllers\UserController@getIndex');
//Route::namespace('Front')->group(function (){
//  Route::get('users','');
//});
/*ute::group(['namespace'=>'App\Http\Controllers\Admin'],function() {

    Route::get('secound', 'secoundController@showString' )-> middleware('Authenticate');
    // Route::get('Third', 'ThirdController@showString');
});
//Route::group(['middleware'=>'Authenticate']);
Route::resource('news','App\Http\Controllers\NewsController');

Route::get('zaid','App\Http\Controllers\ViewController@ShowView');
Route::get('landing',function (){
    return view('landing');});
Route::get('about',function (){
    return view('about');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/',function() {
    return view('home');
});
Route::get('/ShowString',[App\Http\Controllers\ThirdController::class, 'ShowString'])->name('k');
