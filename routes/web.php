<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllersDashboard\PostController;
use App\Http\Controllers\ControllersDashboard\CategoriesController;
use App\Http\Controllers\ControllersWeb\BlogController;

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

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function(){

   Route::get('/', function () {
        return view('dashboard');
    })->name("dashboard"); 

    Route::resources([
        'post' => PostController::class,
        'categorias' => CategoriesController::class,
    ]);
});


Route::group(['prefix' => 'blog'], function(){

    Route::controller(BlogController::class)->group(function(){
        Route::get('/', "index")->name('web.blog.index');
        Route::get('/{post}', "show")->name('web.blog.show');
    }); 
 
 });

require __DIR__.'/auth.php';
