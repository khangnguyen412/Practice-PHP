<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route; // thư viện nhận route
use Illuminate\Http\Request; // thư viện nhận tham số cho form post

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

// view nằm trong đường dẫn: resources/views
// controller nằm trong đường dẫn: app/http

/**
 * Các Loại Route:
 * Route::get
 * Route::post 
 * Route::put
 * Route::delete
 * Route::match         kết hợp nhiều phương phức như POST,GET,PUT,..
 * Route::any           nhận tất cả các phương thức.
 * Route::group         tạo ra các nhóm route.
 * Route::controller    gọi đến controller tương ứng mà chúng ta tự định.
 * Route::resource      sử dụng với resource controller.
 * 
 * - Trong Đó:
 * -> $url là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

/**
 * Route::get
 * Cú pháp:     Route::get('url', $action);
 * Trong Đó:
 * -> $url là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

// gọi tới đường dẫn '/helloWorld' sẽ thực hiện 1 function ở phía sau
Route::get('/helloWorld', function(){
    return 'đây là khởi đầu quá trinh tự học framework của Khang';
});

// gọi tới đường dẫn '/' chính sẽ được chuyển tới views/welcome.blade.php
Route::get('/', function () { 
    return view('welcome');
});

// gọi tới đường dẫn '/testGetRoute' chính sẽ được chuyển tới views/testGetRoute.blade.php
Route::get('/testGetRoute', function () { 
    return view('testGetRoute');
});

/**
 * Route::post
 * tương tự như get nhưng khác nhau:
 * - get có thể gọi trực tiếp từ url còn post chỉ đc gọi form
 * 
 * Cú pháp:     Route::post('url', $action);
 * Trong Đó:
 * -> $url là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

// tạo 1 form nhập dữ liệu có method post tại file views/getFormPost.blade.php
// trong form sẽ có phương thức post vào gọi tới url /testPostRoute
Route::get('/getFormPost', function () {
    return view('getFormPost');
});

// gọi tới đường dẫn '/testPostRoute' sẽ thực hiện 1 function ở phía sau nhưng sử dụng post
Route::post('/testPostRoute', function( Request $arr){
    $name = $arr -> input('name');
    return "test method post của laravel và post có tham số là $name";
});
// để post sử dụng thư viện Request và nhận tham số của $arr

/**
 * Route::match
 * Chấp nhập tất cả phương thức được khai báo
 * 
 * Cú pháp:     Route::match([method], 'url', $action);
 * -> $method là phương thức có thể sử dụng trong route này
 * -> $url là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */
Route::get('/getFormMatch', function () {
    return view('getFormMatch');
});
Route::match(['get', 'post'], '/testMatchRoute', function (Request $arr) {
    $param1 = $arr -> input('name');
    if(isset($param1)){
        return "đã gọi vào thành công method match và kèm theo tham số $param1";
    }
    return 'đã gọi vào thành công method match';
});
// khi gọi trực tiếp tới url /testMatchRoute trên thanh url của gg, match nhận method get
// khi gọi nhập số từ url /getFormMatch và submit, match nhận method post

/**
 * Route::any
 * Chấp nhập tất cả phương thức
 * 
 * Cú pháp:     Route::any('url', $action);
 * -> $url là đường dẫn trên web
 * -> $action là một câu lệnh hoặc hàm nào đó khi được gọi tới đường dẫn trùng với $url
 */

Route::any('/testRouteAny', function () { 
    return 'đây là route any';
});

/**
 * Route::resource()
 * 
 */



Route::get('/admin/{name}', function ($name) { 
    return view('admin.hello', ['name' => $name]); 
    // truyền thêm tham số name trong mãng ['name' => $name] vào view
});
// truyền tham số /{name} vào views/admin/hello.blade.php qua tham số admin.hello

Route::get('/callview/data', [adminController::class, 'index']); 
// gọi tới controller có đường dẫn app/http/adminController.php và thực hiện hàm index

Route::get('/callview/add', [adminController::class, 'addDB']);
Route::get('/callview', function () {
    return view('test2');
});
Route::get('/insertuser/{id}/', [adminController::class, 'index']);
// Route::get('info/{name}/{age}', 'adminController@index')->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
// Route::get('/info', [adminController::class, 'index']);
Route::get('/info/{name}/{age}', [adminController::class, 'index'])->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
Route::get('/info2/{name}/{age}', [adminController::class, 'addDB'])->where(['name' => '[a-zA-Z]+', 'age' => '[0-9]+']);
Route::redirect('/old-url', '/new-url');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
