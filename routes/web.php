<?php

use App\Http\Controllers\ProductsController;
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

//Laravel 8(new)
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);

// Pattern is integer
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

//  Pattern is a string
// Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[A-Z]+');

Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-zA-Z]+',
    'id' => '[0-9]+'
]);


//Laravel 8(also new)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Before Laravel 8
//Route::get('/products', 'ProductsController@index'); doesnot work in laravel 8



//Route that sends back a view
// Route::get('/', function () {
//     return view('home');
// });

//Route to users - String
// Route::get('/users', function () {
//     return 'Welcome to the users page';
// });

//Route to users- Array(JSON)
// Route::get('/users', function () {
//     return ['PHP', 'Laravel'];
// });

//Route to users - JSON Object
// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'Krishman',
//         'course' => 'Laravel'
//     ]);
//     ;
// });


//Route to users- function

// Route::get('/users', function() {
//     return redirect('/');
// });
