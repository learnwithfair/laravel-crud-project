<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get( '/', function () {
//     return view( 'welcome' );
// } );
Route::get( '/', [CategoryController::class, 'index'] );
Route::resource( 'categories', CategoryController::class );
Route::get( '/clear', function () {
    Artisan::call( 'optimize:clear' );
    return "
          events ..... DONE </br>
          views .......DONE </br>
          cache ...... DONE </br>
          route .......DONE </br>
          config ......DONE </br>
          compiled ....DONE </br>
    ";
} );