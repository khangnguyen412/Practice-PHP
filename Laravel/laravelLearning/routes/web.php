<?php

use App\Http\Controllers\adminController;
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
Route::get('/test', function () {
    return view('test');
});
Route::get('/admin/{name}', function ($name) { // truyền tham số vào view
    return view('admin.hello', ['name' => $name]);
});
Route::get('/callview', function () {
    return view('test2');
 });
// Route::get('info/{name}/{age}', 'adminController@index')->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
// Route::get('/info', [adminController::class, 'index']);
Route::get('info/{name}/{age}', [adminController::class, 'index'])->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
Route::redirect('/old-url', '/new-url');
